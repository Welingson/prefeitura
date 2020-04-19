<?php


namespace Source\Models\Law;

use Source\Core\Model;
use Source\Models\DocumentType;

class Law extends Model
{
    protected $all;

    public function __construct()
    {

        parent::__construct(
            "tb_laws",
            ["id"],
            ["law", "law_number", "date_pub", "type", "law_attachment"],
            [
                
                "law_number" => "law_number = :law_number",
                "law" => "MATCH(law) AGAINST(:search)",
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

        if ($this->all) {
            $terms = "created_at <= NOW()" . ($terms ? " AND {$terms}" : "");
        }

        return parent::find($terms, $params, $columns);
    }


    /**
     * @param string $typeId
     * @return Model|null
     */
    public function type(string $typeId): ?Model
    {

        if ($typeId) {
            return (new DocumentType())->findById($typeId, "type");
        }

        return null;
    }
}
