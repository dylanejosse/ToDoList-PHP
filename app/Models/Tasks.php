<?php

namespace App\Models;

use App\Utils\Database;
use App\Models\CoreModel;
use PDO;

class Tasks extends CoreModel {
    
    protected $name;
    protected $category_id;
    
    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of category_id
     */ 
    public function getCategoryId()
    {
        return $this->category_id;
    }

    /**
     * Set the value of category_id
     *
     * @return  self
     */ 
    public function setCategoryId($category_id)
    {
        $this->category_id = $category_id;

        return $this;
    }

    public static function findAll()
    {
        $pdo = Database::getPDO();
        $securedSql = "
        SELECT *
        FROM `tasks`
        ";
        $pdoStatement = $pdo->prepare($securedSql);
        $pdoStatement->execute();

        $tasksList = $pdoStatement->fetchAll(PDO::FETCH_CLASS, __CLASS__);

        return $tasksList;
    }

    public function insert(){
        $pdo = Database::getPDO();

        $securedSql = "
        INSERT INTO `tasks`(name, category_id)
        VALUES (:name, :categoryId)
        ";

        $pdoStatement = $pdo->prepare($securedSql);
        $pdoStatement-> execute([
            "name" => $this->name,
            "categoryId" => $this->category_id,
        ]);
    }

    public static function delete($id){
        $pdo = Database::getPDO();

        $securedSql = "
        DELETE 
        FROM `tasks`
        WHERE id = :id
        ";

        $pdoStatement = $pdo->prepare($securedSql);
        $pdoStatement-> execute([
            "id" => $id,
        ]);
    }

    public function find($id){
        $pdo = Database::getPDO();

        $securedSql = "
        SELECT * 
        FROM `tasks`
        WHERE id = :id
        ";

        $pdoStatement = $pdo->prepare($securedSql);
        $pdoStatement-> execute([
            "id" => $id,
        ]);

        $task = $pdoStatement->fetchObject(__CLASS__);

        return $task;
    }

    public static function deleteTaskFromCategoryId($categoryId)
    {
        $pdo = Database::getPDO();

        $securedSql = "
        DELETE 
        FROM `tasks`
        WHERE category_id = :categoryId
        ";

        $pdoStatement = $pdo->prepare($securedSql);
        $pdoStatement-> execute([
            "categoryId" => $categoryId,
        ]);
    }
}