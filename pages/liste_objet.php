<?php
require('../inc/functions.php');
$categorie = select_categorie_objet();
$nom_objet = lister_objet();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste d'objets</title>
</head>
<body>
    <table border=1px solid>
        <tr>
            <?php foreach($categorie as $cat) { ?>
                <th><?php echo $cat['nom_categorie'] ?></th>
            <?php } ?>
        </tr>
        <tr>
            <?php foreach($nom_objet as $nom) { ?>
                <th><?php echo $nom['nom_objet'] ?></th>
            <?php } ?>
        </tr>
    </table>
</body>
</html>