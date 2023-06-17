<?php

require_once "CoreController.php";

class ErrorController extends CoreController {

    public function err404() {
        $this->show('error/err404');
    }
}