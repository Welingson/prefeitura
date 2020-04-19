<?php

namespace Source\Models;

use Source\Core\Model;

class DocumentType extends Model
{

    /**
     * DocumentType construct
     */
    public function __construct()
    {
        parent::__construct("tb_documents_type", ["id"], ["type"]);
        
    }


    public function find(?string $terms = null, ?string $params = null, string $columns = "*")
    {
        if($this->all){
            $terms = "created_at <= NOW()" . ($terms ? " AND {$terms}" : "");
        }

        return parent::find($terms, $params, $columns);
    }

    
    

}