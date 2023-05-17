<p><?= $title ?></p>
<p><?= $address ?></p>
<p><?= $description ?></p>
<p><?= $author ?></p>
<img src="<?=$picture?>">


<form method="POST" action="/recommendations/<?= $id ?>">
    <input type="hidden" name="_method" value="delete">
    <button type="submit" class="btn btn-danger">Supprimer</button>
</form>
