<?php

require_once __DIR__ . "/../app/Controllers/MainController.php";
require_once __DIR__ . "/../app/Controllers/ErrorController.php";
require_once __DIR__ . "/../app/Controllers/TasksController.php";
require_once __DIR__ . "/../app/Controllers/UserController.php";

require_once __DIR__ . "/../vendor/autoload.php";

$router = new AltoRouter();

// Routes générales
$router->map('GET', "/", "MainController#home", "main-home");
$router->map('GET', "/price", "MainController#price", "main-price");

// Routes liées aux tasks
$router->map('GET', "/tasks", "TasksController#list", "tasks-list");
$router->map('GET', "/add-category", "TasksController#addCategory", "tasks-add-category");
$router->map('GET', "/add-tasks", "TasksController#addDisplay", "tasks-add");


// Routes liées aux erreurs
$router->map('GET', "/error", "ErrorController#err404", "error-404");

// Routes liées aux utilisateurs
$router->map('GET', "/login", "UserController#login", "user-login");
$router->map('GET', "/create-account", "UserController#createAccount", "user-create-account");


$match = $router->match();

$dispatcher = new Dispatcher($match, 'ErrorController::err404');
$dispatcher->dispatch();
?>

