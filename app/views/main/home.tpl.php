<section style="height: 80vh">

<div class="d-flex flex-wrap align-items-end justify-content-center m-auto" style="height: 25vh">
  <h1>Votre ToDoList personnalisée</h1>
  <p class="col-10 text-center">Notez toutes les tâches que vous souhaitez, triez les en fonctions de catégories customisées et augmentez votre productivité !</p>
</div>

<div class="d-flex justify-content-center align-items-center" style="height: 40vh">
  <div class="d-flex justify-content-center align-items-center m-auto">
    <img src="/images/taches.png" alt="TodoList" class="col-7">
  </div>
</div>

<div style="height: 12vh">
   <div class="d-flex flex-wrap align-items-center justify-content-center col-9 h-100 m-auto">
    <a class="w-100 btn btn-success" href="<?php global $router; echo $router->generate('user-login'); ?>" role="button">Me connecter</a>
    <a class="w-100 btn btn-light" href="<?php global $router; echo $router->generate('user-create-account'); ?>" role="button">Créer un compte</a>
   </div> 
</div>

</section>