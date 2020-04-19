<?php


namespace Source\App;

use Source\Core\Controller;
use Source\Models\Banner;
use Source\Models\Bidding\Bidding;
use Source\Models\Bidding\Status;
use Source\Models\Category;
use Source\Models\Contact;
use Source\Models\Decree\Decree;
use Source\Models\DocumentType;
use Source\Models\Management;
use Source\Models\News\News;
use Source\Models\Secretary;
use Source\Models\Law\Law;
use Source\Models\Ordinance\Ordinance;
use Source\Support\Pager;

class Site extends Controller
{

    public function __construct()
    {
        parent::__construct(__DIR__ . "/../../themes/" . CONF_VIEW_THEME . "/");
    }

    public function home(): void
    {
        $head = $this->seo->render(
            CONF_SITE_NAME,
            CONF_SITE_DESC,
            url(),
            theme("/assets/images/logo-brazopolis.png")
        );

        echo $this->view->render(
            "home",
            [
                "head" => $head,
                "news" => (new News())->find()->fetch(true),
                "banners" => (new Banner())->find()->fetch(true),
                "secretary" => (new Secretary())->find()->fetch(true)
            ]
        );
    }

    public function newspaper(?array $data): void
    {

        $head = $this->seo->render(
            "Notícias da " . CONF_SITE_NAME,
            "Confira as principais notícias da" . CONF_SITE_DESC,
            url("/noticias"),
            theme("/assets/images/logo-brazopolis.png")
        );

        echo $this->view->render(
            "News/newspaper",
            [
                "head" => $head,
                "news" => (new News())->find()->fetch(true),
                "category" => (new Category())->find("type = :type", "type=news", "id, category")->fetch(true)
            ]
        );
    }

    public function newspaperNews(?array $data): void
    {
        $post = (new News())->findByUri($data['uri']);


        if (!$post) {
            redirect("/404");
        }

        $post->views += 1;
        $post->save();

        $attachment = $post->findAttachment($post->id, "*", true);

        $iframe = $post->findIframe($post->id, "*", true);

        $head = $this->seo->render(
            "Notícias da " . CONF_SITE_NAME,
            $post->title,
            url("/noticias/{$post->uri}"),
            image($attachment[0]->dir_image, 1200, 628)
        );


        echo $this->view->render(
            "News/newspaper-news",
            [
                "head" => $head,
                "post" => $post,
                "attachment" => $attachment,
                "iframe" => $iframe
            ]
        );
    }

    public function newspaperSearch(?array $data): void
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            foreach ($data as $key => $search) {
                $dataValidate[$key] = filter_var($search, FILTER_SANITIZE_STRIPPED);
            }

            $search = (!empty($dataValidate["terms"]) ? $dataValidate["terms"] : "all");
            $dateOne = (!empty($dataValidate["dateOne"] && isset($dataValidate["dateOne"]) && $dataValidate["dateOne"] != "all")) ?
                (new \DateTime($dataValidate["dateOne"]))->format("Y-m-d H:i:s") : "all";

            $dateTwo = (!empty($dataValidate["dateTwo"] && isset($dataValidate["dateTwo"]) && $dataValidate["dateTwo"] != "all")) ? (new \DateTime(
                $dataValidate["dateTwo"]
            ))->format("Y-m-d H:i:s") : "all";

            $category = (!empty($dataValidate["category"]) ? $dataValidate["category"] : "all");

            echo json_encode(
                ["redirect" => url("/noticias/buscar/{$search}/{$dateOne}/{$dateTwo}/{$category}/1")]
            );
            return;
        }


        if (empty($data)) {
            redirect("/noticias");
        }


        // $news = (new News())->filterSearch(
        //     $data,
        //     [
        //         "search" => "MATCH(title, news) AGAINST(:search)",
        //         "category" => "category = :category"
        //     ]
        // );

        // var_dump($news);


        // $head = $this->seo->render(
        //     "Notícias da " . CONF_SITE_NAME,
        //     "Confira as principais notícias da" . CONF_SITE_DESC,
        //     url("/noticias"),
        //     theme("/assets/images/logo-brazopolis.png")
        // );


        // echo $this->view->render(
        //     "News/newspaper",
        //     [
        //         "head" => $head,
        //         "news" => $news->fetch(true),
        //         "category" => (new Category())->find("type = :type", "type=news", "id, category")->order("category ASC")->fetch(true)
        //     ]
        // );
    }

    public function bidding(?array $data)
    {

        $bidding = (new Bidding())->find("", "", "id, process_number, object, bidding_number, modality, status");
        $pager = new Pager(url("/licitacao/p/"));
        $pager->pager($bidding->count(), 5, $data['page'] ?? 1);

        $head = $this->seo->render(
            "Licitação - " . CONF_SITE_NAME,
            "Licitações da " . CONF_SITE_DESC,
            url("/licitacao"),
            theme("/assets/images/logo-brazopolis.png")
        );

        echo $this->view->render(
            "Documents/bidding",
            [
                "head" => $head,
                "modality" => (new Category())->find("type = :type", "type=bidding", "id, category")->order("category ASC")->fetch(true),
                "status" => (new Status())->find("", "", "id, status")->order("status ASC")->fetch(true),
                "bidding" => $bidding->order("process_number DESC")->limit($pager->limit())->offset($pager->offset())->fetch(true),
                "paginator" => $pager->render()
            ]
        );
    }

    public function biddingModality(?array $data): void
    {

        $modality = str_replace("-", " ", $data["modality"]);

        $category = (new Category())->find("category LIKE :category", "category=%{$modality}%", "id")->fetch();
        if (!$category) {
            redirect("/404");
        }

        $bidding = (new Bidding())->findByModality($category->id);
        $pager = new Pager(url("/licitacao/{$data["modality"]}/p/"));
        $pager->pager($bidding->count(), 3, $data['page'] ?? 1);

        $head = $this->seo->render(
            "Licitação - " . CONF_SITE_NAME,
            "Licitações da " . CONF_SITE_DESC,
            url("/licitacao"),
            theme("/assets/images/logo-brazopolis.png")
        );

        echo $this->view->render(
            "Documents/bidding",
            [
                "head" => $head,
                "bidding" => $bidding->order("process_number DESC")->limit($pager->limit())->offset($pager->offset())->fetch(true),
                "modality" => (new Category())->find("type = :type", "type=bidding", "id, category")->order("category ASC")->fetch(true),
                "status" => (new Status())->find("", "", "id, status")->order("status ASC")->fetch(true),
                "paginator" => $pager->render()
            ]
        );
    }

    public function biddingSearch(?array $data): void
    {

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            foreach ($data as $key => $search) {
                $dataValidate[$key] = filter_var($search, FILTER_SANITIZE_STRIPPED);
            }

            $number = (!empty($dataValidate["number"]) ? $dataValidate["number"] : "all");
           
            $search = (!empty($dataValidate["terms"]) ? $dataValidate["terms"] : "all");

            $dateOne = (!empty($dataValidate["datePrevious"]) && isset($dataValidate["datePrevious"])? $dataValidate["datePrevious"]: "all");
            $dateTwo = (!empty($dataValidate["dateLater"]) && isset($dataValidate["dateLater"])? $dataValidate["dateLater"]: "all");

            $modality = (!empty($dataValidate["category"]) ? $dataValidate["category"] : "all");
            $status = (!empty($dataValidate["status"]) ? $dataValidate["status"] : "all");


            echo json_encode(
                ["redirect" => url("/licitacao/buscar/{$number}/{$search}/{$dateOne}/{$dateTwo}/{$modality}/{$status}/p/1")]
            );
            return;
        }


        if (empty($data)) {
            redirect("/licitacao");
        }


        $bidding = (new Bidding())->filterSearch($data);

        $pager = new Pager(url("/licitacao/buscar/{$data['process_number']}/{$data['search']}/{$data['datePrevious']}/{$data['dateLater']}/{$data['modality']}/{$data['status']}/p/"));
        $pager->pager($bidding->count(), 3, $data['page'] ?? 1);
        
        $head = $this->seo->render(
            "Licitações da " . CONF_SITE_NAME,
            "Confira as Licitações da" . CONF_SITE_DESC,
            url("/licitacao"),
            theme("/assets/images/logo-brazopolis.png")
        );

        echo $this->view->render(
            "Documents/bidding",
            [
                "head" => $head,
                "bidding" => $bidding->order("bidding_number DESC, date_pub DESC")->limit($pager->limit())->offset($pager->offset())->fetch(true),
                "modality" => (new Category())->find("type = :type", "type=bidding", "id, category")->order("category ASC")->fetch(true),
                "status" => (new Status())->find("", "", "id, status")->order("status ASC")->fetch(true),
                "paginator" => $pager->render()
            ]
        );

    }

    public function decree(?array $data): void
    {

        $head = $this->seo->render(
            "Decretos - " . CONF_SITE_NAME,
            "Decretos publicados - " . CONF_SITE_DESC,
            url("/decretos"),
            theme("/assets/images/logo-brazopolis.png")
        );

        $decree = new Decree();

        $decree->find(null, null, "id, number_decree, type, date_pub");
        $pager = new Pager(url("/decretos/p/"));
        $pager->pager($decree->count(), 5, $data['page'] ?? 1);

        echo $this->view->render(
            "Documents/decree",
            [
                "head" => $head,
                "decree" => $decree->order("number_decree DESC, date_pub DESC")->limit($pager->limit())->offset($pager->offset())->fetch(true),
                "paginator" => $pager->render()
            ]
        );
    }

    public function decreeSearch(?array $data): void
    {

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            foreach ($data as $key => $search) {
                $dataValidate[$key] = filter_var($search, FILTER_SANITIZE_STRIPPED);
            }

            $number = (!empty($dataValidate["number"]) ? $dataValidate["number"] : "all");
            $search = (!empty($dataValidate["terms"]) ? $dataValidate["terms"] : "all");
            $type = (!empty($dataValidate["type"]) ? $dataValidate["type"] : "all");
          
            $datePrevious = (!empty($dataValidate["datePrevious"]) && isset($dataValidate["datePrevious"])? $dataValidate["datePrevious"]: "all");
            $dateLater = (!empty($dataValidate["dateLater"]) && isset($dataValidate["dateLater"])? $dataValidate["dateLater"]: "all");

            echo json_encode(
                ["redirect" => url("/decretos/buscar/{$number}/{$search}/{$type}/{$datePrevious}/{$dateLater}/p/1")]
            );
            return;
        }


        if (empty($data)) {
            redirect("/decretos");
        }

        $decree = new Decree();

        $decree = $decree->filterSearch($data);

        $pager = new Pager(url("/decretos/buscar/{$data['number_decree']}/{$data['search']}/{$data['type']}/{$data['datePrevious']}/{$data['dateLater']}/p/"));
        $pager->pager($decree->count(), 3, $data['page'] ?? 1);

        $head = $this->seo->render(
            "Decretos - " . CONF_SITE_NAME,
            "Decretos publicados - " . CONF_SITE_DESC,
            url("/decretos"),
            theme("/assets/images/logo-brazopolis.png")
        );

        echo $this->view->render(
            "Documents/decree",
            [
                "head" => $head,
                "decree" => $decree->limit($pager->limit())->offset($pager->offset())->order("number_decree DESC")->fetch(true)
            ]
        );
    }

    public function laws(?array $data): void
    {
        $head = $this->seo->render(
            "Leis - " . CONF_SITE_NAME,
            "Confira as Leis publicadas - " . CONF_SITE_DESC,
            url("/leis-municipais"),
            theme("/assets/images/logo-brazopolis.png")
        );

        $law = (new Law())->find(null, null, "id, law, law_number, type, date_pub, law_attachment")->order("law_number DESC, date_pub DESC")->fetch(true);

        echo $this->view->render(
            "Documents/law",
            [
                "head" => $head,
                "law" => $law
            ]
        );
    }

    public function lawSearch(Array $data): void
    {

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            foreach ($data as $key => $search) {
                $dataValidate[$key] = filter_var($search, FILTER_SANITIZE_STRIPPED);
            }

            $number = (!empty($dataValidate["number"]) ? $dataValidate["number"] : "all");
            $search = (!empty($dataValidate["terms"]) ? $dataValidate["terms"] : "all");
          
            $datePrevious = (!empty($dataValidate["datePrevious"]) && isset($dataValidate["datePrevious"])? $dataValidate["datePrevious"]: "all");
            $dateLater = (!empty($dataValidate["dateLater"]) && isset($dataValidate["dateLater"])? $dataValidate["dateLater"]: "all");

            echo json_encode(
                ["redirect" => url("/leis/buscar/{$number}/{$search}/{$datePrevious}/{$dateLater}/p/1")]
            );
            return;
        }


        if (empty($data)) {
            redirect("/leis");
        }

        $law = new Law();

        // var_dump($data);

        $law = $law->filterSearch($data);

        // var_dump($law);

        $pager = new Pager(url("/decretos/buscar/{$data['law_number']}/{$data['search']}/{$data['datePrevious']}/{$data['dateLater']}/p/"));
        $pager->pager($law->count(), 3, $data['page'] ?? 1);


        $head = $this->seo->render(
            "Leis - " . CONF_SITE_NAME,
            "Leis publicadas - " . CONF_SITE_DESC,
            url("/leis"),
            theme("/assets/images/logo-brazopolis.png")
        );

        echo $this->view->render(
            "Documents/law",
            [
                "head" => $head,
                "documentType" => (new DocumentType())->find(null, null, "id, type")->order("type ASC")->fetch(true),
                "law" => $law->limit($pager->limit())->offset($pager->offset())->order("law_number DESC")->fetch(true)
            ]
        );

        
    }

    public function ordinance(?array $data): void
    {
        $head = $this->seo->render(
            "Portarias - " . CONF_SITE_NAME,
            "Portarias - " . CONF_SITE_DESC,
            url("/portarias"),
            theme("/assets/images/logo-brazopolis.png")
        );

        $ordinance = (new Ordinance())
            ->find(null, null, "id, number_ordinance, ordinance, ordinance_attachment, created_at")
            ->order("number_ordinance DESC")
            ->fetch(true);

        echo $this->view->render(
            "Documents/ordinance",
            [
                "head" => $head,
                "ordinance" => $ordinance
            ]
        );
    }

    public function ordinanceSearch(Array $data): void
    {

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            foreach ($data as $key => $search) {
                $dataValidate[$key] = filter_var($search, FILTER_SANITIZE_STRIPPED);
            }

            $number = (!empty($dataValidate["number"]) ? $dataValidate["number"] : "all");
            $search = (!empty($dataValidate["terms"]) ? $dataValidate["terms"] : "all");
          
            $datePrevious = (!empty($dataValidate["datePrevious"]) && isset($dataValidate["datePrevious"])? $dataValidate["datePrevious"]: "all");
            $dateLater = (!empty($dataValidate["dateLater"]) && isset($dataValidate["dateLater"])? $dataValidate["dateLater"]: "all");

            echo json_encode(
                ["redirect" => url("/portarias/buscar/{$number}/{$search}/{$datePrevious}/{$dateLater}/p/1")]
            );
            return;
        }


        if (empty($data)) {
            redirect("/portarias");
        }

        $ordinance = new Ordinance();

        // var_dump($data);

        $ordinance = $ordinance->filterSearch($data);

        // var_dump($ordinance);

        $pager = new Pager(url("/decretos/buscar/{$data['number_ordinance']}/{$data['search']}/{$data['datePrevious']}/{$data['dateLater']}/p/"));
        $pager->pager($ordinance->count(), 3, $data['page'] ?? 1);


        $head = $this->seo->render(
            "Portarias - " . CONF_SITE_NAME,
            "Portarias publicadas - " . CONF_SITE_DESC,
            url("/portarias"),
            theme("/assets/images/logo-brazopolis.png")
        );

        echo $this->view->render(
            "Documents/ordinance",
            [
                "head" => $head,
                "ordinance" => $ordinance->limit($pager->limit())->offset($pager->offset())->order("number_ordinance DESC, date_pub DESC")->fetch(true)
            ]
        );
        
    }

    public function management(?array $data): void
    {
        $management = (new Management())->find("level = :level", "level=manager")->fetch(true);

        if (!$management) {
            redirect("/404");
        }

        $head = $this->seo->render(
            "Gestão - " . CONF_SITE_NAME,
            "Gestão - " . CONF_SITE_DESC,
            url("/gestao"),
            theme("/assets/images/logo-brazopolis.png")
        );


        echo $this->view->render(
            "Management/management-list",
            [
                "head" => $head,
                "management" => $management
            ]
        );
    }

    public function managementSecretary(?array $data): void
    {
        $secretary = (new Management())->findBySecretary($data["secretary"]);
        if (!$secretary) {
            redirect("/404");
        }

        $manager = (new Management())->findByManager($secretary->id, "manager");
        $employee = (new Management())->findByManager($secretary->id, "employee", true);
        $contactManager = (new Contact())->findByManagerId($manager->id, "telephone, email");


        $head = $this->seo->render(
            "{$secretary->secretary} - " . CONF_SITE_NAME,
            "{$secretary->secretary} - " . CONF_SITE_DESC,
            url("/gestao/" . strtolower($secretary->secretary)),
            theme("/assets/images/logo-brazopolis.png")
        );


        echo $this->view->render(
            "Management/management",
            [
                "head" => $head,
                "secretary" => $secretary,
                "manager" => $manager,
                "contactManager" => $contactManager,
                "employee" => $employee

            ]
        );
    }




    public function county(?array $data): void
    {
        $titleManager = "Prefeito";
        $titleEmployee = "vice prefeito";

        $manager = (new Management())->find("title=:title", "title={$titleManager}", "id, name, title, photo")->fetch();
        $employee = (new Management())->find("title=:title", "title={$titleEmployee}", "id, name, title, photo")->fetch();

        $emailManager = (new Contact())->findByManagerId($manager->id, "email");
        $emailEmployee = (new Contact())->findByManagerId($employee->id, "email");

        $head = $this->seo->render(
            "Dados gerais do Município de Brazópolis - " . CONF_SITE_NAME,
            "Conheça o município de Brazópolis  - " . CONF_SITE_DESC,
            url("/municipio"),
            theme("/assets/images/logo-brazopolis.png")
        );


        echo $this->view->render(
            "County/county",
            [
                "head" => $head,
                "manager" => $manager,
                "employee" => $employee,
                "emailManager" => $emailManager,
                "emailEmployee" => $emailEmployee,
                "view" => "County/county-general"
            ]
        );
    }

    public function countySymbol(): void
    {
        $head = $this->seo->render(
            "Símbolos do Município de Brazópolis - " . CONF_SITE_NAME,
            "Conheça os símbolos do Município de Brazópolis  - " . CONF_SITE_DESC,
            url("/municipio/simbolos"),
            theme("/assets/images/logo-brazopolis.png")
        );

        echo $this->view->render(
            "County/county",
            [
                "head" => $head,
                "view" => "County/county-symbol"
            ]
        );
    }

    public function countyHistory(): void
    {
        $head = $this->seo->render(
            "História de Brazópolis - " . CONF_SITE_NAME,
            "Conheça a história de Brazópolis  - " . CONF_SITE_DESC,
            url("/municipio/historia"),
            theme("/assets/images/logo-brazopolis.png")
        );

        echo $this->view->render(
            "County/county",
            [
                "head" => $head,
                "view" => "County/county-history"
            ]
        );
    }

    public function countyTurism(?array $data): void
    {
        $turism = "";

        if (!empty($data["turism"]) && isset($data["turism"])) {
            $turism = "County/" . $data["turism"];
            if (!file_exists(__DIR__ . "/../../themes/" . CONF_VIEW_THEME . "/{$turism}.php")) {
                redirect("/404");
            }
        }


        $head = $this->seo->render(
            "Turismo de Brazópolis - " . CONF_SITE_NAME,
            "Conheça o turismo de Brazópolis  - " . CONF_SITE_DESC,
            url("/municipio/turismo"),
            theme("/assets/images/logo-brazopolis.png")
        );


        echo $this->view->render(
            "County/county",
            [
                "head" => $head,
                "view" => "County/county-turism",
                "turism" => $turism
            ]
        );
    }


    public function countyCulture(?array $data): void
    {
        $patrimony = "";

        if (!empty($data["patrimony"]) && isset($data["patrimony"])) {
            $patrimony = "County/" . $data["patrimony"];
            if (!file_exists(__DIR__ . "/../../themes/" . CONF_VIEW_THEME . "/{$patrimony}.php")) {
                redirect("/404");
            }
        }

        $head = $this->seo->render(
            "Cultura de Brazópolis - " . CONF_SITE_NAME,
            "Conheça a cultura e também os patrimônios de Brazópolis  - " . CONF_SITE_DESC,
            url("/municipio/cultura"),
            theme("/assets/images/logo-brazopolis.png")
        );

        echo $this->view->render(
            "County/county",
            [
                "head" => $head,
                "view" => "County/county-culture",
                "patrimony" => $patrimony
            ]
        );
    }

    public function error(?array $data): void
    {
        $error = new \stdClass();

        switch ($data['errcode']) {
            case "problemas":
                $error->code = "OPS";
                $error->title = "Estamos enfrentando problemas!";
                $error->message = "Parece que nosso serviço não está diponível no momento. Já estamos vendo isso mas caso precise, envie um e-mail :)";
                $error->linkTitle = "ENVIAR E-MAIL";
                $error->link = "mailto:" . CONF_MAIL_SUPPORT;
                break;

            case "manutencao":
                $error->code = "OPS";
                $error->title = "Desculpe. Estamos em manutenção!";
                $error->message = "Voltamos logo! Por hora estamos trabalhando para melhorar nosso conteúdo para você :P";
                $error->linkTitle = null;
                $error->link = null;
                break;

            default:
                $error->code = $data['errcode'];
                $error->title = "Ooops. Conteúdo indispinível :/";
                $error->message = "Sentimos muito, mas o conteúdo que você tentou acessar não existe, está indisponível no momento ou foi removido :/";
                $error->linkTitle = "Continue navegando!";
                $error->link = url_back();
                break;
        }


        $head = $this->seo->render(
            "{$error->code} | {$error->title}",
            $error->message,
            url("/ops/{$error->code}"),
            theme("/assets/images/logo-brazopolis.png"),
            false
        );


        echo $this->view->render(
            "error",
            [
                "head" => $head,
                "error" => $error
            ]
        );
    }
}
