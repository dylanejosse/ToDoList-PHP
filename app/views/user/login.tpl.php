<section style="height: 80vh">

  <div class="d-flex justify-content-center align-items-center h-100">

  <div class="p-3 col-6 m-auto">

  <h3 class="mb-3">Connexion</h3>

    <form class="w-100 m-auto" method="POST">

      <div class="mb-3">
        <label for="email" class="form-label">Adresse Email</label>
        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">Votre adresse mail ne sera jamais transmise à un tiers</div>
      </div>

      <div class="mb-3">
        <label for="password" class="form-label">Mot de passe</label>
        <input type="password" class="form-control" id="password" name="password">
        <div id="passwordHelp" class="form-text">Ne partagez votre mot de passe avec personne</div>
      </div>

      <button type="submit" class="btn btn-primary">Connexion</button>
      <a type="button" class="btn btn-light mx-3" href="<?php global $router; echo $router->generate("user-create-account")?>">Créer un compte</a>

    </form>

  </div>

  </div>

</section>