<?php

session_start();


require_once __DIR__ . "/../app/Controllers/MainController.php";
require_once __DIR__ . "/../app/Controllers/ErrorController.php";
require_once __DIR__ . "/../app/Controllers/TasksController.php";
require_once __DIR__ . "/../app/Controllers/UserController.php";
require_once __DIR__ . "/../app/Controllers/CategoryController.php";

require_once __DIR__ . "/../vendor/autoload.php";

$router = new AltoRouter();

// Routes générales
$router->map('GET', "/", "MainController#home", "main-home");
$router->map('GET', "/price", "MainController#price", "main-price");

// Routes liées aux tasks
$router->map('GET', "/tasks/[i:userId]", "TasksController#list", "tasks-list");
$router->map('GET', "/add-tasks/[i:userId]", "TasksController#addDisplay", "tasks-add");
$router->map('POST', "/add-tasks/[i:userId]", "TasksController#add", "tasks-insert");
$router->map('GET', "/tasks/remove/[i:taskId]", "TasksController#remove", "tasks-remove");

// Routes liées aux catégories
$router->map('GET', "/add-category", "CategoryController#addDisplay", "category-add");
$router->map('POST', "/add-category", "CategoryController#insertCategory", "category-insert");
$router->map('GET', "/category/remove/[i:categoryId]", "CategoryController#remove", "category-remove");

// Routes liées aux erreurs
$router->map('GET', "/error", "ErrorController#err404", "error-404");

// Routes liées aux utilisateurs
$router->map('GET', "/login", "UserController#loginDisplay", "user-login");
$router->map('POST', "/login", "UserController#loginVerification", "user-login-verification");
$router->map('GET', "/logout", "UserController#logout", "user-logout");
$router->map('GET', "/create-account", "UserController#createAccount", "user-create-account");
$router->map('POST', "/create-account", "UserController#create", "user-create");

$match = $router->match();

$dispatcher = new Dispatcher($match, 'ErrorController::err404');

if (!$match):
    header("Location: " . $router->generate("error-404"));
else:
    $dispatcher->setControllersArguments($match['name']);
endif;

$dispatcher->dispatch();