<div class="">
  <div class="container">
    <div class="row row-cols-4">
      <?php foreach($recommandationList as $recommendation): ?>
        <div class="col">
        <img class="img" src="<?=$recommendation["picture"]?>">  
        <span class="recommendation-title" href="#"><?=$recommendation["title"]?></span>
      <br>
          <span style="font-style: italic;" class="nav-link" href="#"><?=$recommendation["address"]?></span>
          <span class="nav-link" href="#">Auteur : <?=$recommendation["author"]?></span>  
          <br>
          <a href="/recommendations/<?=$recommendation["id"]?>" class="btn-hp-reco">Voir plus</a>
          </div>
          <?php endforeach ?>
    
  </div>
</div>
