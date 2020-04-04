<?php


namespace Source\Models;


use Source\Core\Model;

class Banner extends Model
{

    public function __construct()
    {
        parent::__construct("tb_banner", ["id"], ["banner"]);
    }

    public function find(?string $terms = null, ?string $params = null, string $columns = "*")
    {
        $terms = "status = :status AND created_at <= NOW()" . ($terms ? " AND {$terms}" : "");
        $params = "status=draft" . ($params ? "&{$params}" : "");

        return parent::find($terms, $params, $columns);
    }

    






}