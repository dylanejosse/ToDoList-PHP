<?php

require_once "CoreController.php";

class UserController extends CoreController {

    public function login() {
        $this->show("user/login");
    }

    public function createAccount() {
        $this->show("user/create");
    }

}