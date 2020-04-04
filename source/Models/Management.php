<?php

namespace Source\Models;

use Source\Core\Model;

class Management extends Model
{

    public function __construct()
    {
        parent::__construct("tb_manager", ["id"], ["name", "id_secretary", "title", "level"]);
    }

    public function findByName(string $name, string $columns = "*"): ?Model
    {
        if($name){
            return $this->find("name = :name", "name={$name}", $columns)->fetch();
        }

        return null;
    }

    public function findBySecretaryId(string $columns = "*"): ?Model
    {
        if ($this->secretary) {
            return (new Secretary())->findById($this->secretary, $columns);
            
        }

        return null;
    }

    public function findBySecretary(string $secretary): ?Model
    {
        if($secretary){
            return (new Secretary())->findBySecretary($secretary);
        }

        return null;
    }

    public function findByLevel(string $level): ?Array
    {
        if($level){
            return $this->find("level = :level", "level={$level}")->fetch(true);
        }
        
    }

    public function contact(string $idManager, string $columns = "*", bool $all = false)
    {
        if ($idManager) {
            if (!$all) {
                return (new Contact())->find("id_manager = :id_manager", "id_manager={$idManager}", $columns)->fetch();
            }

            return (new Contact())->find("id_manager = :id_manager", "id_manager={$idManager}", $columns)->fetch(true);
        }

        return null;
    }

    public function findByManager(string $idSecretary, string $level, bool $all = false)
    {

        if($idSecretary){
            if($all){
                return $this->find("secretary = :secretary AND level= :level", "secretary={$idSecretary}&level={$level}", "id, name, title, photo")->fetch(true);
            }

            return $this->find("secretary = :secretary AND level= :level", "secretary={$idSecretary}&level={$level}", "id, name, title, photo")->fetch();
            
        }

        return null;
        
    }
}
