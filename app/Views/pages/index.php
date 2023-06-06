      <div class="">  
        <div class="container">
        <span style="font-size: 23px;">Pamela vous recommande...</span>
        <br>
        <br>
            <div class="row row-cols-4">
                <?php foreach($recommendationsList as $recommendation): ?>
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
                    <br>
                    </div>   
                <?php endforeach ?>
              
            </div>
        </div>
      </div>