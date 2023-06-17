<?php

require_once "CoreController.php";

use App\Models\User;

class UserController extends CoreController {

    public function loginDisplay() {
        $this->show("user/login");
    }

    public function logout() {
        
        unset($_SESSION["auth"]);
        global $router;
        header("Location: " . $router->generate("main-home"));
    }

    public function loginVerification() {

        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
        $password = filter_input(INPUT_POST, "password");

        $userByEmail = User::findByEmail($email);

        if (! $userByEmail ) {

            echo "Couple identifiant / Mot de passe incorrect !";

        } elseif (password_verify($password, $userByEmail->getPassword())) {

            $_SESSION["auth"] = $userByEmail->getId();
            global $router;
            header("Location: ". $router->generate("tasks-list", ["userId" => $_SESSION["auth"]]));
            die();

        } else {

            echo "Couple identifiant / Mot de passe incorrect !";

        }

        global $router;
        header("Location: ". $router->generate("user-login"));
        
    }

    public function createAccount() {
        $this->show("user/create");
    }

    public function create(){

        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
        $password = filter_input(INPUT_POST, "password");

        $password = password_hash($password, PASSWORD_DEFAULT);

        $newAccount = new User();

        $newAccount->setEmail($email);
        $newAccount->setPassword($password);

        $newAccount->insert();

        global $router;
        header("Location: " . $router->generate("main-home"));
    }
}