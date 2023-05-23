<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Hola Pamela</title>
  </head>
  <body>
    <!-- <h1>Hola Pamela</h1> -->

    <nav class="navbar navbar-light bg-light">
      <a class="navbar-brand" href="#">
        <img src="/docs/4.1/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
        <span style="font-size: 24px;" font-weight: bold;>Hola Pamela</span>
      </a>
    </nav>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <!-- <a class="navbar-brand" href="#">Catégories</a> -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ">
        <?php foreach($categoriesList as $categorie): ?>
            <li class="nav-item" >
              <a class="nav-link" href="/cat/<?=$categorie["id"]?>"><?=$categorie["title"]?></a>
            </li>
        <?php endforeach ?>
      </ul>
      <li class="nav-item ml-auto" >
        <a class="btn btn-primary" href="/form" role="button">J'ai une recommandation</a>
      </li> 
    </div>
  </nav>