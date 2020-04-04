<?php


namespace Source\Models\News;

use Source\Core\Model;

class Iframe extends Model
{


    public function __construct()
    {

        parent::__construct("tb_news_iframe", ["id"], ["news_iframe","id_news"]);

    }

    public function findByNews(string $idNews, string $columns): ?Array
    {
        if($idNews){
            return $this->find("id_news=:id_news", "id_news={$idNews}");
        }

        return null;
    }




}

