<?php

require_once "CoreController.php";

class TasksController extends CoreController {

    public function list() {
        // Récupération des données 

        // Fournir les données à la vue
        $this->show("tasks/list");
    }

    public function addCategory(){

        $this->show('tasks/addCategory');
    }

    public function addDisplay(){

        $this->show('tasks/addTasks');
    }

}