<div class="container">

    <div class="row row-cols-2">
        <div class="col">  
            <img class="img-reco" src="<?=$picture?>">
        </div>

        <div class="col"> 
            <h1 class=""><?= $title ?></h1>
            <p style="font-style: italic;"><?= $address ?></p>
            <br>
            <p><?= $description ?></p>
            <p >Auteur : <?= $author ?></p>
        </div>
    </div>
        <br>
        <!-- <form method="POST" action="/recommendations/<?= $id ?>">
            <input type="hidden" name="_method" value="delete">
            <button type="submit" class="btn btn-danger">Supprimer</button>
        </form> -->
    </div>
</div>