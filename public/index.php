<?php require_once __DIR__ . "/../app/partials/header.php"?>

  <!--Titre de la page principale-->
  <div class="d-flex p-3">
    <h1 class="m-auto">Bienvenue sur votre ToDoList</h1>
  </div>

  <!-- Ajout d'une nouvelle note -->
  <div class="accordion accordion-flush py-3" id="accordionFlushExample">
    <div class="accordion-item">

      <!-- Description et mode de fonctionnement de la ToDoList -->
      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        + Nouvelle Note
        </button>
      </h2>

      <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
        
        <!-- Input récupérant la tâche -->
        <div class="form-floating py-3">
          <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
          <label for="floatingTextarea">Titre</label>
        </div>

        <!-- Choix de la catégorie -->
        <select class="form-select py-3" aria-label="Default select example">
          <option selected>Sélectionnez une catégorie</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>

        <!-- Ajout d'un commentaire -->
        <div class="form-floating py-3">
          <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
          <label for="floatingTextarea2">Commentaires</label>
        </div>
      
        <!-- Boutton de validation -->
        <button type="button" class="btn btn-primary btn-sm py-3 w-25">Valider</button>

      </div>
  </div>

  <!-- Liste des Tâches à effectuer en focntion de leurs catégories -->
  <div class="d-flex justify-content-end">
  <div class=" mx-0 d-flex card col-sm-12 col-lg-8 my-3 m-auto justify-content-end">

    <div class="card-body bg-primary">
      <h5 class="card-title">Category Name3</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>

    <div class="accordion accordion-flush" id="accordionFlushExample">

    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed d-flex g-col-9" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFifty" aria-expanded="false" aria-controls="flush-collapseFifty">
          <p class="w-100 m-0">Accordion Item #1</p>

          <div class="w-100 validate d-flex justify-content-end">
            <p class="my-0 px-1">✅</p>
            <p class="my-0 px-1">❌</p>
          </div>

        </button>
      </h2>

      <div id="flush-collapseFifty" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
      </div>

    </div>

    </div>
  </div>
  </div>

  <?php require __DIR__ . "/../app/partials/footer.php"?>
