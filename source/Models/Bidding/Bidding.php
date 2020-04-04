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
        parent::__construct("tb_bidding", ["id"], ["process_number", "object", "bidding_number", "modality", "status"]);
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


    public function findAttachment(string $idBidding): ?Array
    {
        if ($idBidding){
            return (new Attachment())->find("id_bidding=:id_bidding", "id_bidding={$idBidding}")->fetch(true);
        }

        return null;

    }

//     public function filterSearch(array $data)
//     {
//         var_dump($data);
//         $filter = [
//             "process_number" => "process_number = :process_number",
//             "search" => "MATCH(object) AGAINST(:search)",
//             "status" => "status = :status",
//             "modality" => "modality = :modality"
//         ];

//         $paramns = null;

//         foreach ($filter as $key => $value) {
//             if (array_key_exists($key, $data)) {
//                 if ($data[$key] != "all") {
//                     $paramns[$key] = "{$key}={$data[$key]}";
//                 } else {
//                     unset($filter[$key]);
//                 }
//             } else {
//                 unset($filter[$key]);
//             }
//         }

//         if (!empty($data["dateOne"]) && isset($data["dateOne"]) && $data["dateOne"] != "all" &&
//             !empty($data["dateTwo"]) && isset($data["dateTwo"]) && $data["dateTwo"] != "all") {
//             $filter["date"] = "created_at BETWEEN :dateOne AND :dateTwo";
//             $data["date"] = "";

//             $paramns["dateOne"] = "dateOne=" . $data["dateOne"];
//             $paramns["dateTwo"] = "dateTwo=" . $data["dateTwo"];

//             $dateOne = new \DateTime($data["dateOne"]);
//             $dateTwo = new \DateTime($data["dateTwo"]);

//             if (($dateOne->diff($dateTwo))->invert == 1) {
//                 $paramns["dateOne"] = "dateOne=" . $data["dateTwo"];
//                 $paramns["dateTwo"] = "dateTwo=" . $data["dateOne"];
//             }
//         } elseif (!empty($data["dateOne"]) && isset($data["dateOne"]) && $data["dateOne"] != "all") {
//             $filter["date"] = "created_at >= :date";
//             $data["date"] = "";
//             $paramns["date"] = "date=" . $data["dateOne"];
//         } elseif (!empty($data["dateTwo"]) && isset($data["dateTwo"]) && $data["dateTwo"] != "all") {
//             $filter["date"] = "created_at >= :date";
//             $data["date"] = "";
//             $paramns["date"] = "date=" . $data["dateTwo"];
//         }

//         $filter = implode(" AND ", $filter);
//         $paramns = ($paramns)? implode("&", $paramns):"";

// //        return (new Bidding())->find($filter, $paramns)->order("created_at DESC");


//         return (new Bidding())->find($filter, $paramns)->order("created_at DESC")->fetch(true);
//     }


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

    public function findByModality(string $modalityId):?Model
    {
        if (!$modalityId){
            return null;
        }

        $bidding = parent::find("modality=:modality ORDER BY created_at DESC", "modality={$modalityId}");

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