<div class="container">

    <?php foreach($recommandationList as $recommendation): ?>
                <p class="nav-link" href="#"><?=$recommendation["title"]?></p>
                <p class="nav-link" href="#"><?=$recommendation["address"]?></p>
                <p class="nav-link" href="#"><?=$recommendation["description"]?></p>
                <p class="nav-link" href="#"><?=$recommendation["author"]?></p>
                <img src="<?=$recommendation["picture"]?>">     

                <a href="/recommendations/<?=$recommendation["id"]?>" class="button">Show more</a>

    <?php endforeach ?>
</div>
