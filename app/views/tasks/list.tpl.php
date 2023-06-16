<!--Titre de la page principale-->
<div class="p-3">

  <div class="d-flex col-12">
    <h1 class="m-auto text-center">Bienvenue sur votre ToDoList</h1>
  </div>

  <!-- Ajout d'une nouvelle note -->
  <div class="container d-flex flex-wrap justify-content-center align-items-center mt-3">

    <div class="add-category d-flex align-items-center justify-content-center col-6 col-lg-2 m-2">
      <a href="<?php global $router; echo $router->generate('tasks-add-category'); ?>"><button style="button" class="btn btn-light text-center w-100 m-auto">Ajouter une catégorie</button></a>
    </div>

    <div class="add-task d-flex align-items-center justify-content-center col-6 col-lg-2 m-2">
      <a href="<?php global $router; echo $router->generate('tasks-add'); ?>"><button style="button" class="btn btn-primary w-100 m-auto">Créer une nouvelle note</button></a>
    </div>

  </div>

  <!-- Liste des Tâches à effectuer en focntion de leurs catégories -->

    <!-- Description de la catégorie en question -->

    <div class="d-flex justify-content-center p-3">

      <div class=" mx-0 d-flex card col-12 my-3 m-auto justify-content-center">

        <div class="card-body bg-primary">
          <h5 class="card-title">Nom de la catégorie</h5>
          <p class="card-text">Retrouvez ici un exemple de contenu pouvant être ajouté à cet endroit</p>
        </div>

        <!-- Description d'une tâche en particulier -->
        <div class="p-3 border">

          <div class="accordion accordion-flush" id="accordionFlushExample">

            <div class="accordion-item col-12">

              <div class="d-flex align-items-center">

                <h2 class="accordion-header fs-3 col-9">Nom de la tâche</h2>

                <div class=" d-flex justify-content-end col-3">
                  <button type="button" class="btn btn-success p-2">V</button>
                  <button type="button" class="btn btn-danger p-2 ms-3">X</button>
                </div>

              </div>

            </div>
      
          </div>
    
        </div>

      </div>

    </div>

  </div>

</div>