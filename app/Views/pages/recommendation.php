
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
name="adress" 
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
name="pitcure" 
placeholder="Photo" 
value="<?= $picture ?>"
      />
      <input 
type="text" 
name="author" 
placeholder="Auteur" 
value="<?= $author ?>"
      />
    <input type="submit" />
</form>

