<?php
require('../inc/functions.php');
require('menu.php');
$categories = select_categorie_objet();
$objets = lister_objet();
$emprunt = emprunter_objet($objets['id_objet']);
// $inserer = inserer_emprunt($nom_objet);
// $select = select_emprunt($nom_objet);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Objets</title>
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <h2>Uploader un fichier</h2> 
    <form action="../traitement/traitement_upload.php" method="post" enctype="multipart/form-data"> 
        <label for="fichier">Choisir un fichier :</label> 
        <input type="file" name="fichier" id="fichier" required> 
            <br><br> 
        <input type="submit" value="Uploader"> 
    </form>
    <br>
    <br>
    <form method="GET">
        <select name="categorie">
            <option value="">Toutes les catégories</option>
            <?php foreach($categories as $cat) { ?>
                <option value="<?= $cat['id'] ?>"><?= $cat['nom_categorie'] ?></option>
            <?php } ?>
        </select>
        <input type="text" name="nom" placeholder="Nom objet">
        <label><input type="checkbox" name="dispo"> Disponible</label>
        <input type="submit" value="Rechercher">
    </form>

    <table border="1">
        <tr><th>Nom</th><th>Date retour</th></tr>
        <?php foreach($objets as $obj) { ?>
        <tr>
            <td><?= $obj['nom_objet'] ?></td>
            <td><?= $obj['date_retour'] ?? 'Disponible' ?></td>
            <td><button type="submit" class="btn btn-primary"><a href="emprunter.php?emp=<?=$emprunt['id_objet']?>"></a>emprunter</button></a></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
