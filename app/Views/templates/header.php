<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <title>Hola Pamela</title>
  </head>
  <body>
    <!-- <h1>Hola Pamela</h1> -->
<div class="content">

    <nav class="navbar navbar-light header">
      <a class="navbar-brand" href="http://localhost:8080/">
        <span class="title-header">Hola Pamela</span>
        <img class="logo" src="/pictures/testlogo.png" alt="Logo">
      </a>
    </nav>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

  
  <nav class="navbar navbar-expand-lg navbar-light bg-light-hp color-navbar">


    <!-- <a class="navbar-brand" href="#">Catégories</a> -->
    <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> -->


    <div class="row w-100">
      <div class="col">
        
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ">
              <?php foreach($categoriesList as $categorie): ?>
                  <li class="nav-item" >
                    
                    <a href="/cat/<?=$categorie["id"]?>">
                    <img src="/pictures/categories/cat<?=$categorie["id"]?>.png" width="30" height="30">
                    </a>
                    <a class="nav-link" href="/cat/<?=$categorie["id"]?>"><?=$categorie["title"]?> </a>
              
                  </li>
              <?php endforeach ?>
            </ul>
          </div>
      </div>

      <div class="col right" style="margin-top: 24px;">
        <div class="row-hp">
          <div class="col">
            <form class="form-inline input-group row-hp" method="get" action="/search" >
              <input class="form-control" name="searchText" type="search" placeholder="Search" style="height: 40px;" aria-label="Search">
              <button class="btn-hp-reco" type="submit" style="border:none; font-size: 18px;">Search</button>
            </form>
          </div>
          <div class="col">
            <a class="btn-hp" href="/form" role="button" style="margin-left: 30px;">J'ai une recommandation</a>
          </div>

        </div>
    </div>
  </div>


   
  </nav>