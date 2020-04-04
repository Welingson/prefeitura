<?php


namespace Source\Models;

use Source\Core\Model;

class Category extends Model
{

    public function __construct()
    {
        parent::__construct("tb_category", ["id_category"], ["id_category", "category"]);
    }

    public function findByCategory(string $category, string $columns = "*"): ?Category
    {
        $find = $this->find("category = :category", "category={$category}", $columns);

        return $find->fetch();
    }

    public function save(): bool
    {

        return true;

    }


}