<?php


namespace Source\Models;

use Source\Core\Model;

class InterestingDocuments extends Model
{

    protected $all;

    public function __construct()
    {

        parent::__construct(
            "tb_interesting_documents",
            ["id"],
            ["description", "mark", "date_pub", "title", "dir_attachment"],
            [
                "description" => "description = :description",
                "search" => "MATCH(description, title) AGAINST(:search)"
            ]
        );
    }
}
