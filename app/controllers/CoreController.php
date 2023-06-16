<?php

class CoreController {

    public function show($currentPage, $viewData = []) {

        require_once __DIR__ . "/../partials/header.php";
        require_once __DIR__ . "/../views/" . $currentPage .".tpl.php";
        require __DIR__ . "/../partials/footer.php";
    }
    
}