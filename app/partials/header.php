<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>ToDoList</title>
</head>

<body>

<nav class="navbar bg-body-tertiary" style="height: 10vh">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php global $router; echo $router->generate('main-home'); ?>"><img src="/images/logo.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top"></a></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title fs-3" id="offcanvasNavbarLabel">Votre ToDoList</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link fs-3" aria-current="page" href="<?php global $router; echo $router->generate('main-home'); ?>">Acceuil 🏠</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-3" href="<?php global $router; echo $router->generate('tasks-list'); ?>">Prendre une nouvelle note ✍️</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-3" href="<?php global $router; echo $router->generate('main-price'); ?>">Prix 💰</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>