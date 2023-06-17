<?php

class CoreController {


    public function __construct($route)
    {
        if ($route === "tasks-list" || $route === "tasks-add-category" || $route === "tasks-add") {
            if(empty($_SESSION)):
                global $router;
                header("Location: " . $router->generate("user-login"));
                die();
            endif;
        }   
    }

    public function show($currentPage, $viewData = []) {

        extract($viewData);

        require_once __DIR__ . "/../partials/header.php";
        require_once __DIR__ . "/../views/" . $currentPage .".tpl.php";
        require __DIR__ . "/../partials/footer.php";
    }
    
}