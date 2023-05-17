<head>
    <link href="/views/templates/header.php" crossorigin="anonymous">
  </head>


<h1>page d'accueil</h1>


<?php foreach($recommendationsList as $recommendation): ?>
              <p class="nav-link" href="#"><?=$recommendation["title"]?></p>
              <p class="nav-link" href="#"><?=$recommendation["address"]?></p>
              <p class="nav-link" href="#"><?=$recommendation["description"]?></p>
              <p class="nav-link" href="#"><?=$recommendation["author"]?></p>
              <p class="nav-link" href="#"><?=$recommendation["picture"]?></p>
              
<?php endforeach ?>