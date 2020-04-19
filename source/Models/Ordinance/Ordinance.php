<?php


namespace Source\Models\Ordinance;

use Source\Core\Model;

class Ordinance extends Model
{

    protected $all;


    public function __construct()
    {
       
        parent::__construct(
            "tb_ordinance",
            ["id"],
            ["ordinance", "number_ordinance", "date_pub", "ordinance_attachment"],
            [
                "number_ordinance" => "number_ordinance = :number_ordinance",
                "search" => "MATCH(ordinance) AGAINST(:search)"
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

        if($this->all){
            $terms = "created_at <= NOW()" . ($terms ? " AND {$terms}" : "");
        }

        return parent::find($terms, $params, $columns);
        
    }


    // /**
    //  * @param string $typeId
    //  * @return Model|null
    //  */
    // public function type(string $typeId)
    // {

    //     if($typeId){
    //         return (new DocumentType())->findById($typeId, "type");
    //     }

    //     return null;

    // }



}