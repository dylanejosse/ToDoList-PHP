<?php

use App\Models\Category;
use App\Models\Tasks;
use App\Models\User;
use App\Utils\Database;

require_once "CoreController.php";


class TasksController extends CoreController {

    public function list($userId) {
        // Récupération des données 
        $tasksList = Tasks::findAll();
        $categoryListByUser = Category::findCategoryByUser($userId);
        $userList = User::findAll();

        // Fournir les données à la vue
        if ($userId === $_SESSION["auth"]):
            $this->show("tasks/list", ["tasksList" => $tasksList, "categoryListByUser" => $categoryListByUser, 'userList' => $userList]);
        else:
            $this->show("error/err403");
        endif;
    }

    public function addDisplay($userId){
        $categoryList = Category::findCategoryByUser($userId);

        $this->show('tasks/add', ['categoryList' => $categoryList]);
    }

    public function add(){

        $name = filter_input(INPUT_POST, "taskName");
        $categoryId = filter_input(INPUT_POST, "categoryId");

        $task = new Tasks;

        $task->setName($name);
        $task->setCategoryId($categoryId);

        $task->insert();

        global $router;
        header("Location: " . $router->generate("tasks-list", ["userId" => $_SESSION["auth"]]));
    }

    public function remove($taskId){
       
        Tasks::delete($taskId);
        global $router;
        header("Location: " . $router->generate("tasks-list", ["userId" => $_SESSION["auth"]]));

    }
}