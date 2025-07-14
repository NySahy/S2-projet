<?php
require('../inc/functions.php');
$id = $_GET['id'];

$obj = mysqli_fetch_assoc(mysqli_query(dbconnect(), "SELECT * FROM s2_objet WHERE id = $id"));
$autres = mysqli_query(dbconnect(), "SELECT * FROM s2_image WHERE id_objet = $id");
$historique = mysqli_query(dbconnect(), "SELECT * FROM s2_emprunt WHERE id_objet = $id");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fiche objet</title>
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <h2><?= $obj['nom_objet'] ?></h2>
    <img src="<?= $obj['image'] ?>" width="200">

    <h3>Autres images</h3>
    <?php while ($img = mysqli_fetch_assoc($autres)) { ?>
        <img src="<?= $img['chemin'] ?>" width="100">
    <?php } ?>

    <h3>Historique d'emprunts</h3>
    <ul>
    <?php while ($emp = mysqli_fetch_assoc($historique)) { ?>
        <li>Par: <?= $emp['id_membre'] ?> | Du <?= $emp['date_debut'] ?> au <?= $emp['date_retour'] ?></li>
    <?php } ?>
    </ul>
</body>
</html>

