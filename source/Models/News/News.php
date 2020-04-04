<?php


namespace Source\Models\News;

use Source\Core\Model;
use Source\Models\Category;

/**
 * Class News
 * @package Source\Models
 */
class News extends Model
{

    protected $all;
    public $filter;

    /**
     * News constructor.
     */
    public function __construct()
    {


        parent::__construct("tb_news", ["id_news"], ["id_news", "title", "news", "uri", "status", "category"]);
    }


    /**
     * @param string|null $terms
     * @param string|null $paramns
     * @param string $columns
     * @return mixed|Model
     */
    public function find(?string $terms = null, ?string $paramns = null, string $columns = "*")
    {
        if ($this->all) {
            $terms = "status = :status AND created_at <= NOW()" . ($terms ? " AND {$terms}" : "");
            $paramns = "status=draft" . ($paramns ? "&{$paramns}" : "");
        }


        return parent::find($terms, $paramns, $columns);
    }


    /**
     * @param string $uri
     * @param string $columns
     * @return array|mixed|Model|null
     */
    public function findByUri(string $uri, string $columns = "*"): ?Model
    {
        $find = $this->find("uri = :uri", "uri={$uri}", $columns);

        return $find->fetch();
    }

//     public function filterSearch(array $data)
//     {
//         $filter = [
//             "search" => "MATCH(title, news) AGAINST(:search)",
//             "category" => "category = :category"
//         ];

//         $paramns = null;



//         foreach ($filter as $key => $value) {
//             if (array_key_exists($key, $data)) {
//                 if ($data[$key] != "all") {
//                     $paramns[$key] = "{$key}={$data[$key]}";
//                 } else {
//                     unset($filter[$key]);
//                 }
//             } else {
//                 unset($filter[$key]);
//             }
//         }

//         if (!empty($data["dateOne"]) && isset($data["dateOne"]) && $data["dateOne"] != "all" &&
//             !empty($data["dateTwo"]) && isset($data["dateTwo"]) && $data["dateTwo"] != "all") {
//             $filter["date"] = "created_at BETWEEN :dateOne AND :dateTwo";
//             $data["date"] = "";

//             $paramns["dateOne"] = "dateOne=" . $data["dateOne"];
//             $paramns["dateTwo"] = "dateTwo=" . $data["dateTwo"];

//             $dateOne = new \DateTime($data["dateOne"]);
//             $dateTwo = new \DateTime($data["dateTwo"]);

//             if (($dateOne->diff($dateTwo))->invert == 1) {
//                 $paramns["dateOne"] = "dateOne=" . $data["dateTwo"];
//                 $paramns["dateTwo"] = "dateTwo=" . $data["dateOne"];
//             }
//         } elseif (!empty($data["dateOne"]) && isset($data["dateOne"]) && $data["dateOne"] != "all") {
//             $filter["date"] = "created_at >= :date";
//             $data["date"] = "";
//             $paramns["date"] = "date=" . $data["dateOne"];
//         } elseif (!empty($data["dateTwo"]) && isset($data["dateTwo"]) && $data["dateTwo"] != "all") {
//             $filter["date"] = "created_at >= :date";
//             $data["date"] = "";
//             $paramns["date"] = "date=" . $data["dateTwo"];
//         }



//         $filter = implode(" AND ", $filter);
//         $paramns = ($paramns)? implode("&", $paramns):"";

// //        return (new News())->find($filter, $paramns)->order("created_at DESC");

//         return (new News())->find($filter, $paramns)->order("created_at DESC")->fetch(true);
//     }


    /**
     * @return mixed|Model|null
     */
    public function category(): ?Model
    {
        if ($this->category) {
            return (new Category())->findById($this->category);
        }

        return null;
    }


    /**
     * @param string $idNews
     * @param string $columns
     * @param bool $all
     * @return Array|null|Model
     */
    public function findAttachment(string $idNews, string $columns = "*", $all = false)
    {
        if ($idNews) {
            if (!$all) {
                return (new Attachment())->find("id_news=:id_news", "id_news={$idNews}", $columns)->fetch();
            }
            return (new Attachment())->find("id_news=:id_news", "id_news={$idNews}", $columns)->fetch(true);
        }

        return null;
    }

    /**
     * @param string $idNews
     * @param string $columns
     * @param bool $all
     * @return Array|null|Model
     */
    public function findIframe(string $idNews, string $columns = "*", $all = false)
    {
        if ($idNews) {
            if (!$all) {
                return (new Iframe())->find("id_news=:id_news", "id_news={$idNews}", $columns)->fetch();
            }
            return (new Iframe())->find("id_news=:id_news", "id_news={$idNews}", $columns)->fetch(true);
        }

        return null;
    }


    /**
     * @return bool
     */
    public function save(): bool
    {
        if (!empty($this->id)) {
            $newsId = $this->id;
            $this->update($this->safe(), "id = :id", "id={$newsId}");
            if ($this->fail()) {
                $this->message->error("Erro ao atualizar, verifique os dados!");
                return false;
            }
        }

        return true;
    }


}