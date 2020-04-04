<?php


namespace Source\Models\News;


use Source\Core\Model;

class Attachment extends Model
{

    public function __construct()
    {
        parent::__construct("tb_news_attachment", ["id"], ["dir_image", "id_news"]);
    }

    public function find(?string $terms = null, ?string $params = null, string $columns = "*")
    {

        return parent::find($terms, $params, $columns);


    }


    public function findByNews(string $idNews, string  $columns = "*"): ?Array
    {

        if ($idNews){
            return $this->find("id_news=:id_news", "id_news={$idNews}");
        }

        return null;

    }



}