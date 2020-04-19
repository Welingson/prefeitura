<?php


namespace Source\Models\Bidding;

use Source\Core\Model;
use Source\Models\Category;


/**
 * Class Bidding
 * @package Source\Models\Bidding
 */
class Bidding extends Model
{
    protected $all;
 

    /**
     * Bidding constructor.
     */
    public function __construct()
    {
    

        parent::__construct(
            "tb_bidding", 
            ["id"], 
            ["process_number", "object", "bidding_number", "modality", "status"],
            [
                "process_number" => "process_number = :process_number",
                "search" => "MATCH(object) AGAINST(:search)",
                "modality" => "modality = :modality",
                "status" => "status = :status"
                
            ]
        );
    }

    /**
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
     * @param string $idBidding
     * @return Array|null
     */
    public function findAttachment(string $idBidding): ?Array
    {
        if ($idBidding){
            return (new Attachment())->find("id_bidding=:id_bidding", "id_bidding={$idBidding}")->order("date_pub DESC")->fetch(true);
        }

        return null;

    }


    /**
     * @return Model|null
     */
    public function modality():?Model
    {

        if ($this->modality){
            return (new Category())->findById($this->modality, "category");
        }

        return null;

    }


    /**
     * @param string $modalityId
     * @return Model|null
     */
    public function findByModality(string $modalityId):?Model
    {
        if (!$modalityId){
            return null;
        }

        $bidding = parent::find("modality=:modality", "modality={$modalityId}");

        return $bidding;

    }


    /**
     * @return Model|null
     */
    public function status():?Model
    {
        if ($this->status){
            return (new Status())->findById($this->status);
        }

        return null;

    }

}
