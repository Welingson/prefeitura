<?php


namespace Source\Models\Decree;

use Source\Core\Model;
use Source\Models\DocumentType;

class Decree extends Model
{
    protected $all;


    public function __construct()
    {
       

        parent::__construct(
            "tb_decree",
            ["id"],
            ["decree", "decree_number", "type", "decree_attachment"],
            [
                "number_decree" => "number_decree = :number_decree",
                "search" => "MATCH(decree) AGAINST(:search)",
                "type" => "type = :type"
            ]
        );
        
    }

    /**
     * Undocumented function
     *
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


    /**
     * @param string $typeId
     * @return Model|null
     */
    public function type(string $typeId)
    {

        if($typeId){
            return (new DocumentType())->findById($typeId, "type");
        }

        return null;

    }



}