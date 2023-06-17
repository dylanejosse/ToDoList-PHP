<div class="d-flex align-items-center" style="height: 80vh">

    <div class="p-3 col-6 m-auto">

        <h3 class="mb-5">Création d'une nouvelle tâche</h3>

        <form method="POST">

            <div class="mb-3">
                <label for="name" class="form-label">Nom de la tâche</label>
                <input type="text" class="form-control" id="taskName" name="taskName" aria-describedby="name">
            </div>


            <select class="form-select mb-3" name="categoryId" id="categoryId">
            <?php foreach ($categoryList as $currentCategory): ?>
                <option value="<?= $currentCategory->getId() ?>"><?= $currentCategory->getName() ?></option>
            <?php endforeach; ?>
            </select>

            <button type="submit" class="btn btn-primary">Créer</button>

        </form>

    </div>

</div>