<?php

namespace Source\Models;

use Source\Core\Model;

class Employee extends Model
{


    public function __construct()
    {
        parent::__construct("tb_employee", ["id"], ["employee_name", "id_secretary", "title"]);
    }

    public function findByName(string $name, string $columns = "*")
    {
        if($name){
         return $this->find("employee_name=:employee_name", "employee_name={$name}", $columns);
        }

        return null;
    }

    public function findBySecretaryId(string $idSecretary)
    {
       
        if($idSecretary){
            return $this->find("secretary=:secretary", "secretary={$idSecretary}")->fetch(true);
        }
        
        return null;
    }
}