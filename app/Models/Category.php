<?php

namespace App\Models;

use App\Utils\Database;
use PDO;

class Category extends CoreModel {

    private $name;
    
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

    public static function findAll(){
        $pdo = Database::getPDO();
        $securedSql = "
        SELECT *
        FROM `category`
        ";

        $pdoStatement = $pdo->prepare($securedSql);
        $pdoStatement->execute();

        $categoryList = $pdoStatement->fetchAll(PDO::FETCH_CLASS,__CLASS__);

        return $categoryList;
    }

    public static function findCategoryById($id)
    {
        $pdo = Database::getPDO();
        $securedSql = "
        SELECT *
        FROM `category`
        WHERE id = :id
        ";

        $pdoStatement = $pdo->prepare($securedSql);
        $pdoStatement->execute([
            "id" => $id,
        ]);

        $category = $pdoStatement->fetchObject(__CLASS__);

        return $category;
    }

    public function insert()
    {
        $pdo = Database::getPDO();
        $securedSql = "
        INSERT INTO `category` (name)
        VALUES (:name)
        ";

        $pdoStatement = $pdo->prepare($securedSql);
        $pdoStatement->execute([
            "name" => $this->name
        ]);
    }

    public static function deleteCategory($id)
    {
        $pdo = Database::getPDO();
        $securedSql = "
        DELETE 
        FROM `category`
        WHERE id = :id
        ";

        $pdoStatement = $pdo->prepare($securedSql);
        $pdoStatement->execute([
            "id" => $id
        ]);
    }

    public static function findCategoryByUser($id)
    {
        $pdo = Database::getPDO();
        $securedSql = "
        SELECT *
        FROM `category`
        WHERE user_id = :id
        ";

        $pdoStatement = $pdo->prepare($securedSql);
        $pdoStatement->execute([
            "id" => $id,
        ]);

        $categoryByUser = $pdoStatement->fetchAll(PDO::FETCH_CLASS,__CLASS__);

        return $categoryByUser;
    }
}