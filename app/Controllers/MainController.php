<?php

require_once "CoreController.php";

class MainController extends CoreController {

    public function home() {
        // Récupération des données

        // Fournir les données à la vue
        $this->show("main/home");
    }

    public function price() {
        $this->show("main/price");
    }

}