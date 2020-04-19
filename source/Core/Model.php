<?php

namespace Source\Core;

use Source\Support\Message;

/**
 * Class Model Layer Supertype Pattern
 *
 * @author Welingson E. Santos <welingson12@gmail.com>
 * @package Source\Models
 */
abstract class Model
{
    /** @var object|null */
    protected $data;

    /** @var \PDOException|null */
    protected $fail;

    /** @var Message|null */
    protected $message;

    /** @var string */
    protected $query;

    /** @var string */
    protected $params;

    /** @var string */
    protected $order;

    /** @var int */
    protected $limit;

    /** @var int */
    protected $offset;

    /** @var array $entity data search filter*/
    protected static $filterSearch;

    /** @var string $entity database table */
    protected static $entity;

    /** @var array $protected no update or create */
    protected static $protected;

    /** @var array $entity database table */
    protected static $required;

    /**
     * Model constructor.
     * @param string $entity database table name
     * @param array $protected table protected columns
     * @param array $required table required columns
     */
    public function __construct(string $entity, array $protected, array $required, array $filterSearch = null)
    {
        self::$entity = $entity;
        self::$protected = array_merge($protected, ['created_at', "updated_at"]);
        self::$required = $required;
        self::$filterSearch = $filterSearch;

        $this->message = new Message();
    }

    /**
     * @param $name
     * @param $value
     */
    public function __set($name, $value)
    {
        if (empty($this->data)) {
            $this->data = new \stdClass();
        }

        $this->data->$name = $value;
    }

    /**
     * @param $name
     * @return bool
     */
    public function __isset($name)
    {
        return isset($this->data->$name);
    }

    /**
     * @param $name
     * @return null
     */
    public function __get($name)
    {
        return ($this->data->$name ?? null);
    }

    /**
     * @return null|object
     */
    public function data(): ?object
    {
        return $this->data;
    }

    /**
     * @return \PDOException
     */
    public function fail(): ?\PDOException
    {
        return $this->fail;
    }

    /**
     * @return Message|null
     */
    public function message(): ?Message
    {
        return $this->message;
    }

    /**
     * @param null|string $terms
     * @param null|string $params
     * @param string $columns
     * @return Model|mixed
     */
    public function find(?string $terms = null, ?string $params = null, string $columns = "*")
    {

        if ($terms) {
            $this->query = "SELECT {$columns} FROM " . static::$entity . " WHERE {$terms}";
            parse_str($params, $this->params);

            return $this;
        }

        $this->query = "SELECT {$columns} FROM " . static::$entity;
        return $this;
    }

    /**
     * @param int $id
     * @param string $columns
     * @return null|mixed|Model
     */
    public function findById(int $id, string $columns = "*"): ?Model
    {
        $find = $this->find("id = :id", "id={$id}", $columns);
        return $find->fetch();
    }



    /**
     * @param string $columnOrder
     * @return Model
     */
    public function order(string $columnOrder): Model
    {
        $this->order = " ORDER BY {$columnOrder}";
        return $this;
    }

    /**
     * @param int $limit
     * @return Model
     */
    public function limit(int $limit): Model
    {
        $this->limit = " LIMIT {$limit}";
        return $this;
    }

    /**
     * @param int $offset
     * @return Model
     */
    public function offset(int $offset): Model
    {
        $this->offset = " OFFSET {$offset}";
        return $this;
    }



    /**
     * @param Array $data
     * @return void
     */
    public function filterSearch(Array $data, string $dateInterval = "date_pub", string $columns = "*")
    {

        $paramns = null;
  
        foreach (self::$filterSearch as $key => $value) {
            if (array_key_exists($key, $data)) {
                if ($data[$key] != "all") {
                    $paramns[$key] = "{$key}={$data[$key]}";
                } else {
                    unset(self::$filterSearch[$key]);
                }
            } else {
                unset(self::$filterSearch[$key]);
            }
        }
     

        if (!empty($data["datePrevious"]) && isset($data["datePrevious"]) && $data["datePrevious"] != "all" &&
            !empty($data["dateLater"]) && isset($data["dateLater"]) && $data["dateLater"] != "all") {

            self::$filterSearch["date"] ="{$dateInterval} BETWEEN :datePrevious AND :dateLater";
            $data["date"] = "";

            $paramns["datePrevious"] = "datePrevious=" . $data["datePrevious"];
            $paramns["dateLater"] = "dateLater=" . $data["dateLater"];

            $datePrevious = new \DateTime($data["datePrevious"]);
            $dateLater = new \DateTime($data["dateLater"]);

            if (($datePrevious->diff($dateLater))->invert == 1) {
                $paramns["datePrevious"] = "datePrevious=" . $data["dateLater"];
                $paramns["dateLater"] = "dateLater=" . $data["datePrevious"];
            }
        } elseif (!empty($data["datePrevious"]) && isset($data["datePrevious"]) && $data["datePrevious"] != "all") {
            self::$filterSearch["date"] = "{$dateInterval} >= :date";
            $data["date"] = "";
            $paramns["date"] = "date=" . $data["datePrevious"];
        } elseif (!empty($data["dateLater"]) && isset($data["dateLater"]) && $data["dateLater"] != "all") {
            self::$filterSearch["date"] = "{$dateInterval} <= :date";
            $data["date"] = "";
            $paramns["date"] = "date=" . $data["dateLater"];
        }

        self::$filterSearch = implode(" AND ", self::$filterSearch);
        $paramns = ($paramns)? implode("&", $paramns):"";

        // var_dump($this->find(self::$filterSearch, $paramns));

        return $this->find(self::$filterSearch, $paramns, $columns);

        
    }

    /**
     * @param bool $all
     * @return null|array|mixed|Model
     */
    public function fetch(bool $all = false)
    {
        try {
            $stmt = Connect::getInstance()->prepare($this->query . $this->order . $this->limit . $this->offset);
          
            $stmt->execute($this->params);

            if (!$stmt->rowCount()) {
                return null;
            }

            if ($all) {
                return $stmt->fetchAll(\PDO::FETCH_CLASS, static::class);
            }

            

            return $stmt->fetchObject(static::class);
        } catch (\PDOException $exception) {
            $this->fail = $exception;

            var_dump($this->fail);
            return null;
        }
    }

    /**
     * @param string $key
     * @return int
     */
    public function count(string $key = "id"): int
    {
        $stmt = Connect::getInstance()->prepare($this->query);
        $stmt->execute($this->params);
        return $stmt->rowCount();
    }

    /**
     * @param array $data
     * @return int|null
     */
    protected function create(array $data): ?int
    {
        try {
            $columns = implode(", ", array_keys($data));
            $values = ":" . implode(", :", array_keys($data));

            $stmt = Connect::getInstance()->prepare("INSERT INTO " . static::$entity . " ({$columns}) VALUES ({$values})");
            $stmt->execute($this->filter($data));

            return Connect::getInstance()->lastInsertId();
        } catch (\PDOException $exception) {
            $this->fail = $exception;
            return null;
        }
    }

    /**
     * @param array $data
     * @param string $terms
     * @param string $params
     * @return int|null
     */
    protected function update(array $data, string $terms, string $params): ?int
    {
        try {
            $dateSet = [];
            foreach ($data as $bind => $value) {
                $dateSet[] = "{$bind} = :{$bind}";
            }
            $dateSet = implode(", ", $dateSet);
            parse_str($params, $params);

            $stmt = Connect::getInstance()->prepare("UPDATE " . static::$entity . " SET {$dateSet} WHERE {$terms}");
            $stmt->execute($this->filter(array_merge($data, $params)));
            return ($stmt->rowCount() ?? 1);
        } catch (\PDOException $exception) {
            $this->fail = $exception;
            return null;
        }
    }

    /**
     * @param string $key
     * @param string $value
     * @return bool
     */
    public function delete(string $key, string $value): bool
    {
        try {
            $stmt = Connect::getInstance()->prepare("DELETE FROM " . static::$entity . " WHERE {$key} = :key");
            $stmt->bindValue("key", $value, \PDO::PARAM_STR);
            $stmt->execute();
            return true;
        } catch (\PDOException $exception) {
            $this->fail = $exception;
            return false;
        }
    }

    /**
     * @return array|null
     */
    protected function safe(): ?array
    {
        $safe = (array)$this->data;
        foreach (static::$protected as $unset) {
            unset($safe[$unset]);
        }
        return $safe;
    }

    /**
     * @param array $data
     * @return array|null
     */
    private function filter(array $data): ?array
    {
        $filter = [];
        foreach ($data as $key => $value) {
            $filter[$key] = (is_null($value) ? null : filter_var($value, FILTER_DEFAULT));
        }
        return $filter;
    }

    /**
     * @return bool
     */
    protected function required(): bool
    {
        $data = (array)$this->data();
        foreach (static::$required as $field) {
            if (empty($data[$field])) {
                return false;
            }
        }
        return true;
    }
}
