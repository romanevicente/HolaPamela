    
    <!-- <div class="cards-container"> -->
      <!-- Cards -->
      <div class="">
      
        <div class="container">
        <h3>Vous pourriez aimer...</h3>
            <div class="row row-cols-4">
                <?php foreach($recommendationsList as $recommendation): ?>
                    <div class="col"> 
                    <img class="img" src="<?=$recommendation["picture"]?>">  
                    <span class="recommendation-title" href="#"><?=$recommendation["title"]?></span>
                    <br>
                    <span class="" href="#"><?=$recommendation["address"]?></span>
                    <br>
                    <span class="" href="#"><?=$recommendation["description"]?></span>
                    <br>
                    <span class="" href="#"><?=$recommendation["author"]?></span>
                    <br>
                </div>
   
                <?php endforeach ?></div>
            </div>
        </div>
      </div>
    </div>