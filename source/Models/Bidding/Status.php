<?php


namespace Source\Models\Bidding;

use Source\Core\Model;

class Status extends Model
{

    public function __construct()
    {
        parent::__construct("tb_bidding_status", ["id"], ["status"]);

    }


}