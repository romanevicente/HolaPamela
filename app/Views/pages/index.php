<h1>page d'accueil</h1>


<?php foreach($recommendationsList as $recommendation): ?>
              <p class="nav-link" href="#"><?=$recommendation["title"]?></p>
              <p class="nav-link" href="#"><?=$recommendation["address"]?></p>
              <p class="nav-link" href="#"><?=$recommendation["description"]?></p>
              <p class="nav-link" href="#"><?=$recommendation["author"]?></p>
              <img src="<?=$recommendation["picture"]?>">     
<?php endforeach ?>