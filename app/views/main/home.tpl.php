<section class="d-flex align-items-center m-auto col-10" style="height: 80vh">

<div class="w-100">

<div class="d-flex flex-wrap align-items-center justify-content-center m-auto text-center w-100">
  <div>
    <h1 class="w-100">Votre ToDoList personnalisée</h1>
    <p class="w-100">Notez toutes les tâches que vous souhaitez, triez les en fonction de catégories customisées et augmentez votre productivité !</p>
  </div>
</div>

<div class="w-100">
   <div class="d-flex flex-wrap align-items-end justify-content-center h-100 m-auto">
    <div class="col-lg-7 col-9 mb-3 text-center">
      <a class="col-lg-4 btn btn-primary" href="<?php global $router; echo $router->generate('user-login'); ?>" role="button">Me connecter</a>
    </div>

    <div class="col-lg-7 col-9 text-center">
      <a class="col-lg-4 btn btn-light" href="<?php global $router; echo $router->generate('user-create-account'); ?>" role="button">Créer un compte</a>
    </div>
   </div> 
</div>

</div>

</section>