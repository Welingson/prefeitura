<?php


namespace Source\Models\Mark;

use Source\Core\Model;
use Source\Models\Category;

class Mark extends Model
{

    protected $all;

    public function __construct()
    {
       
        parent::__construct(
            "tb_regulation_mark",
            ["id"],
            ["number_mark", "mark", "category", "date_pub", "dir_attachment"],
            [
                "number_mark" => "number_mark = :number_mark",
                "search" => "MATCH(mark) AGAINST(:search)",
                "category" => "category = :category"
            ]
        );

    }


    /**
     * @param string|null $terms
     * @param string|null $params
     * @param string $columns
     * @return mixed|Model
     */
    public function find(?string $terms = null, ?string $params = null, string $columns = "*")
    {
        if ($this->all) {
            $terms = "created_at <= NOW()" . ($terms ? " AND {$terms}" : "");
        }

        return parent::find($terms, $params, $columns);
    }



    /**
     * @param string $categoryId
     * @return Model|null
     */
    public function Category(string $categoryId): ?Model
    {

        if($categoryId){
            return (new Category())->findById($categoryId, "category");
        }

        return null;

    }


}
