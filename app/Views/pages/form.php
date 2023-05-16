<!DOCTYPE html>
<html>
<head>
    <title>Nouvelle recommandation</title>
</head>
<body>
    <h2>Partage une nouvelle recommandation</h2>
    <form method="post" action="<?php echo site_url('formcontroller/process'); ?>">
        <label for="titLe">Titre</label>
        <input type="text" name="title" required>

        <label for="description">Description</label>
        <input type="text" name="description" required>

        <label for="address">Adresse</label>
        <input type="text" name="address" required>

        <label for="author">Auteur</label>
        <input type="text" name="author" required>

        <input type="submit" value="Je partage">
    </form>
</body>
</html>
