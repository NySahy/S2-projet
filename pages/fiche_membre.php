<?php
require('../inc/functions.php');
$id = $_GET['id'];

$membre = mysqli_fetch_assoc(mysqli_query(dbconnect(), "SELECT * FROM s2_membre WHERE id = $id"));
$objets = mysqli_query(dbconnect(), "SELECT o.*, c.nom_categorie 
    FROM s2_objet o 
    JOIN s2_categorie_objet c ON o.categorie_id = c.id 
    WHERE o.id_membre = $id 
    ORDER BY c.nom_categorie");
?>

<h2><?= $membre['nom'] ?> (<?= $membre['email'] ?>)</h2>
<p>Genre : <?= $membre['genre'] ?> | Ville : <?= $membre['ville'] ?></p>

<h3>Objets du membre</h3>
<?php 
$cat_courante = "";
while ($obj = mysqli_fetch_assoc($objets)) {
    if ($cat_courante != $obj['nom_categorie']) {
        $cat_courante = $obj['nom_categorie'];
        echo "<h4>$cat_courante</h4>";
    }
    echo "- " . $obj['nom_objet'] . "<br>";
}

// $objets = lister_objet();
// $select = select_emprunt($objets['nom_objet']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="d-grid">
        <button type="submit" class="btn btn-primary">Retour</button>
    </div>
</body>
</html>
