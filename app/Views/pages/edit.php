
<form method="post" action="/recommendations/<?= $id ?>">
    <input type="hidden" name="_method" value="patch" />
    <input 
type="text" 
name="title" 
placeholder="Titre de la recommandation" 
value="<?= $title ?>"
     />
    <input 
type="text" 
name="address" 
placeholder="Adresse" 
value="<?= $address ?>"
      />
    <input 
type="text" 
name="description" 
placeholder="Description" 
value="<?= $description ?>"
     />
    <input 
type="" 
name="picture" 
placeholder="Photo" 
value="<?= $picture ?>"
      />
    <input type="submit" />
</form>

