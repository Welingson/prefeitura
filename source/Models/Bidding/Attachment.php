<?php


namespace Source\Models\Bidding;


use Source\Core\Model;

class Attachment extends Model
{

    public function __construct()
    {
        parent::__construct("tb_bidding_attachment", ["id"], ["dir_attachment", "id_bidding"]);
    }

    

}