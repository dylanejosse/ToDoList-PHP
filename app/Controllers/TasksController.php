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
        $this->show("tasks/list", ["tasksList" => $tasksList, "categoryListByUser" => $categoryListByUser, 'userList' => $userList]);
    }

    public function addCategory(){

        $this->show('tasks/addCategory');
    }

    public function addDisplay(){
        $categoryList = Category::findAll();

        $this->show('tasks/addTasks', ['categoryList' => $categoryList]);
    }

    public function add(){

        $name = filter_input(INPUT_POST, "taskName");
        $categoryId = filter_input(INPUT_POST, "categoryId");

        $task = new Tasks;

        $task->setName($name);
        $task->setCategoryId($categoryId);

        $task->insert();

        global $router;
        header("Location: " . $router->generate("tasks-list"));
    }

    public function remove($taskId){
       
        Tasks::delete($taskId);
        global $router;
        header("Location: " . $router->generate("tasks-list"));

    }

    public function insertCategory()
    {
        $newCategory = new Category();

        $categoryName = filter_input(INPUT_POST, "categoryName");
        $categoryDescription = filter_input(INPUT_POST, "categoryDescription");

        $newCategory->setName($categoryName);
        
        $newCategory->insert();

        global $router;
        header("Location: " . $router->generate("tasks-list"));
    }

    public function removeCategory($categoryId)
    {
        Category::deleteCategory($categoryId);
        Tasks::deleteTaskFromCategoryId($categoryId);
        global $router;
        header("Location: " . $router->generate("tasks-list"));
    }
}