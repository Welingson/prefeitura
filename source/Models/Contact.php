<?php


namespace Source\Models;

use Source\Core\Model;

class Contact extends Model
{


    public function __construct()
    {
        parent::__construct("tb_contact_manager", ["id"], ["id_manager"]);
    }

    public function findByManagerId(string $idManager, string $columns = "*")
    {
        if($idManager){
            return $this->find("id_manager = :id_manager", "id_manager={$idManager}", $columns)->fetch();
        }

        return null;

        
    }


}