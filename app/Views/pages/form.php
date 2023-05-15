<!DOCTYPE html>

<h2>Partage une nouvelle recommandation</h2>

<form method="post" action="/task">
    <div class="row mb-3">
    <label for="titLe" class="col-sm-1 col-form-label">Titre</label>
    <div class="col-sm-10">
    <input type="text" class="form-field" name="title" required>
    </div>
</div>

<div class="row mb-3">
    <label for="description" class="col-sm-1 col-form-label">Description</label>
    <div class="col-sm-10">
    <input type="text" class="form-field" name="description" required>
    </div>
</div>

<div class="row mb-3">
    <label for="address" class="col-sm-1 col-form-label">Adresse</label>
    <div class="col-sm-10">
    <input type="text" class="form-field" name="address" required>
    </div>
</div>

<div class="row mb-3">
    <label for="author" class="col-sm-1 col-form-label">Auteur</label>
    <div class="col-sm-10">
    <input type="text" class="form-field" name="author" required>
    </div>
</div>

<button type="submit" class="btn btn-primary">Je partage</button>

</form>
</body>
</html>
