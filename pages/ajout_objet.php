<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout objet</title>
</head>
<body>
    <form action="../traitement/traitement_ajout_objet.php" method="POST" enctype="multipart/form-data">
    <input type="text" name="nom" placeholder="Nom objet" required>
    <select name="categorie_id">
        <?php foreach(select_categorie_objet() as $cat) { ?>
            <option value="<?= $cat['id'] ?>"><?= $cat['nom_categorie'] ?></option>
        <?php } ?>
    </select>
    <input type="file" name="images[]" multiple>
    <input type="submit" value="Ajouter">
</form>
</body>
</html>