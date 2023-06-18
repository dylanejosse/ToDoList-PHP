<!--Titre de la page principale-->
<div class="col-11 p-3 m-auto">

  <div class="d-flex col-12">
    <h1 class="m-auto text-center">Bienvenue sur votre ToDoList</h1>
  </div>

  <!-- Ajout d'une nouvelle note -->
  <div class="container d-flex flex-wrap justify-content-center align-items-center mt-3">

    <div class="add-category d-flex align-items-center justify-content-center col-6 col-lg-2 m-2">
      <a href="<?php global $router; echo $router->generate('category-add'); ?>"><button style="button" class="btn btn-light text-center w-100 m-auto fs-7">Ajouter une catégorie</button></a>
    </div>

    <div class="add-task d-flex align-items-center justify-content-center col-6 col-lg-2 m-2">
      <a href="<?php global $router; echo $router->generate('tasks-add', ['userId' => $_SESSION["auth"]]); ?>"><button style="button" class="btn btn-primary w-100 m-auto fs-7">Créer une nouvelle note</button></a>
    </div>

  </div>

  <div class="card card-body bg-light my-3">
      <p class="card-text text-center fs-5">Cliquez sur "Terminé" une fois la tâche réalisée pour la supprimer de votre liste<br>Vous pouvez également supprimer une liste directement (avec toutes les tâches correspondantes) en cliquant sur la petite croix</p>
  </div>

  <!-- Liste des Tâches à effectuer en focntion de leurs catégories -->

    <!-- Description de la catégorie en question -->

    <?php 

       foreach ($categoryListByUser as $currentCategory): ?>
      
        <div class="card mb-3">

        <div class="d-flex align-items-center justify-content-between card-body bg-light w-100">
          <p class="card-title fw-bold fs-4 m-0"><?= $currentCategory->getName() ?></p>
          <a type="button" class="btn btn-danger" href="<?php global $router; echo $router->generate("category-remove", ['categoryId' => $currentCategory->getId()]);?>">Supprimer</a>
        </div>

        <!-- Description d'une tâche en particulier -->
        <?php foreach($tasksList as $currentTask): 
          if ($currentCategory->getId() === $currentTask->getCategoryId()):?>

        <div class="p-3 border">

          <div class="accordion accordion-flush" id="accordionFlushExample">

            <div class="accordion-item col-12">

              
              <div class="d-flex align-items-center">

                <p class="accordion-header col-9 fs-5"><?= $currentTask->getName()?></p>
      
                <div class="d-flex justify-content-end col-3">
                  <a type="button" class="col-1 btn btn-success p-2 ms-3" href="<?php global $router; echo $router->generate("tasks-remove", ['taskId' => $currentTask->getId()]);?>">V</a>
                </div>

              </div>
              
            </div>
      
          </div>
    
        </div>

        <?php endif;

        endforeach; ?>

        </div>

        <?php endforeach;?>

  </div>

</div>