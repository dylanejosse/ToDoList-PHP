<?php

namespace App\Models;

use App\Models\CoreModel;
use App\Utils\Database;
use PDO;

class User extends CoreModel {

    private $email;
    private $password;
    

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    public function insert() {
        $pdo = Database::getPDO();

        $securedSql = "
        INSERT INTO `app_user`(email, password)
        VALUES (:email, :password)
        ";

        $pdoStatement = $pdo->prepare($securedSql);
        $pdoStatement-> execute([
            "email" => $this->email,
            "password" => $this->password,
        ]);
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    public static function findByEmail($email) 
    {
        $pdo = Database::getPDO();
        $sqlSecured = "
        SELECT *
        FROM `app_user`
        WHERE email = :email
        ";

        $pdoStatement = $pdo->prepare($sqlSecured);
        $pdoStatement->execute([
            "email" => $email,
        ]);

        $userById = $pdoStatement->fetchObject( __CLASS__);

        return $userById;
    }

    public static function findAll()
    {
        $pdo = Database::getPDO();
        $sqlSecured = "
        SELECT *
        FROM `app_user`
        ";

        $pdoStatement = $pdo->prepare($sqlSecured);
        $pdoStatement->execute([]);

        $userList = $pdoStatement->fetchAll(PDO::FETCH_CLASS, __CLASS__);

        return $userList;
    }
}