<div class="">  
        <div class="container">
        <h3>Vous pourriez aimer...</h3>
        <br>
            <div class="row row-cols-4">
                <?php foreach($recommandationListSearch as $recommendation): ?>
                    <div class="col"> 
                    <a href="/recommendations/<?=$recommendation["id"]?>" >
                     <img class="img" src="<?=$recommendation["picture"]?>">  
                    </a>
                    <br>
                    <span class="recommendation-title" href="#"><?=$recommendation["title"]?></span>
                    <br>
                    <span class="" style="font-style: italic;" href="#"><?=$recommendation["address"]?></span>
                    <br>
                    <span class="" href="#">Auteur : <?=$recommendation["author"]?></span>
                    <br>
                    </div>   
                <?php endforeach ?>
              
            </div>
        </div>
      </div>