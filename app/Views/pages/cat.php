<div class="container">
<div class="col row row-cols-4">
  <?php foreach($recommandationList as $recommendation): ?>
    <div class="col">
    <img class="img" src="<?=$recommendation["picture"]?>">  
    <span class="recommendation-title" href="#"><?=$recommendation["title"]?></span>
  <br>
      <span class="nav-link" href="#"><?=$recommendation["address"]?></span>
      <span class="nav-link" href="#"><?=$recommendation["description"]?></span>
      <span class="nav-link" href="#"><?=$recommendation["author"]?></span>
      <img src="<?=$recommendation["picture"]?>">     
      <a href="/recommendations/<?=$recommendation["id"]?>" class="button">Voir plus</a>
      <?php endforeach ?>
</div>
  </div>
  </div>
  