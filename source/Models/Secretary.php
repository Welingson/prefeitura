<?php

namespace Source\Models;

use Source\Core\Model;

class Secretary extends Model
{

    public function __construct()
    {
        parent::__construct("tb_secretary", ["id"], ["secretary"]);
    }


    public function findBySecretary(string $secretary, string $columns = "*"): ?Secretary
    {
        if ($secretary){
            return $this->find("secretary = :secretary", "secretary={$secretary}", $columns)->fetch();
        }
        return null;
        
    }

    public function findByManager(string $idSecretary, string $level)
    {
        $terms = "secretary = :seretary AND level = :level";
        $paramns = "secretary={$idSecretary}&level={$level}";





    }



}