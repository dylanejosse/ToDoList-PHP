<?php

use App\Models\Category;
use App\Models\Tasks;

require_once "CoreController.php";

class CategoryController extends CoreController {

    public function addDisplay(){
        $this->show('category/add');
    }

    public function insertCategory()
    {
        $newCategory = new Category();

        $categoryName = filter_input(INPUT_POST, "categoryName");

        $newCategory->setName($categoryName);
        
        $newCategory->insert();

        global $router;
        header("Location: " . $router->generate("tasks-list", ['userId' => $_SESSION["auth"]]));
    }

    public function remove($categoryId)
    {
        Category::deleteCategory($categoryId);
        Tasks::deleteTaskFromCategoryId($categoryId);
        global $router;
        header("Location: " . $router->generate("tasks-list", ['userId' => $_SESSION["auth"]]));
    }
}