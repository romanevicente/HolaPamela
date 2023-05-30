<!DOCTYPE html>
<html>
<head>
  <title>Partage une nouvelle recommandation</title>
</head>
<body>

<h2>Partage une nouvelle recommandation</h2>

<div class="container pt-5 form-background img-background">
  <div class="row justify-content-center">
    <div class="col-12 col-md-6">
      <form method="post" action="/form" enctype="multipart/form-data" >

        <div class="mb-3">
          <label for="title" class="form-label font-title">Titre</label>
          <input type="text" class="form-control" id="title" name="title" required>
        </div>

        <div class="mb-3">
          <label for="category" class="form-label">Catégorie</label>
          <select class="form-select" id="category" name="category" required>
            <option selected>Choisissez...</option>
                  <?php foreach($categoriesList as $categorie): ?>
                <option value="<?=$categorie["id"]?>"><?=$categorie["title"]?></option>
              <?php endforeach ?>
              </select>
        </div>

        <div class="mb-3">
          <label for="address" class="form-label">Adresse</label>
          <input type="text" class="form-control" id="address" name="address" required>
        </div>

        <div class="style-description mb-3">
          <label for="description" class="form-label">Description</label>
          <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
        </div>

        <div class="mb-3">
          <label for="picture" class="form-label">Photo</label>
          <input type="file" class="form-control" id="picture" name="picture" required>
        </div>

        <div class="mb-3">
          <label for="author" class="form-label">Auteur</label>
          <input type="text" class="form-control" id="author" name="author" required>
        </div>

        <button type="submit" class="btn btn-primary">Je partage</button>

      </form>
    </div>
  </div>
</div>

<!-- Ajouter les liens vers les fichiers JavaScript Bootstrap ici -->

</body>
</html>
