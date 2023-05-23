    <!-- <div class="cards-container"> -->
      <!-- Cards -->
      <div class="">
        <div class="container">
            <div class="row row-cols-4">
                <?php foreach($recommendationsList as $recommendation): ?>
                    <div class="col"> 
                    <p class="nav-link recommendation-title" href="#"><?=$recommendation["title"]?></p>
                    <p class="nav-link" href="#"><?=$recommendation["address"]?></p>
                    <p class="nav-link" href="#"><?=$recommendation["description"]?></p>
                    <p class="nav-link" href="#"><?=$recommendation["author"]?></p>
                    <img src="<?=$recommendation["picture"]?>">  
                </div>
   
                <?php endforeach ?></div>
            </div>
        </div>
      </div>
    </div>