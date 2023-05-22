<!DOCTYPE html>
<html>
<head>
  <title>Partage une nouvelle recommandation</title>
</head>
<body>
    
    <h2>Partage une nouvelle recommandation</h2>
    
    <div class="container pt-5">
  <div class="row justify-content-start">
    <div class="col-12 col-md-6 col-lg-4">
        <form method="post" action="/form">
        <div class="row mb-3">
            <label for="title" class="col-sm-2 col-form-label">Titre</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="title" required>
            </div>
        </div>

        <div class="row mb-3">
          <label for="categorie" class="col-sm-2 col-form-label">Catégorie</label>
          <div class="col-sm-10">
              <select class="form-select" name="categorie">
                  <option selected>Choisissez...</option>
                  <?php foreach($categoriesList as $categorie): ?>
                <option value="7"><?=$categorie["title"]?></option>
              <?php endforeach ?>
            </select>
          </div>
        </div>

        <div class="row mb-3">
          <label for="description" class="col-sm-2 col-form-label">Description</label>
          <div class="col-sm-10">
              <textarea class="form-control" name="description" rows="3" required></textarea>
            </div>
        </div>
        
        <div class="row mb-3">
            <label for="address" class="col-sm-2 col-form-label">Adresse</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" name="address" required>
        </div>
    </div>
    
    <div class="row mb-3">
        <label for="author" class="col-sm-2 col-form-label">Auteur</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="author" required>
        </div>
    </div>
    
        <div class="row mb-3">
            <label for="picture" class="col-sm-2 col-form-label">Photo</label>
          <div class="col-sm-10">
              <input type="file" class="form-control" name="picture" required>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="btn btn-primary">Je partage</button>
            </div>
        </div>
    </form>
    </div>
</div>
</div>

</body>
</html>


<!-- 