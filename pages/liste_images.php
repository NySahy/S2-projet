<?php
session_start();
require('../inc/functions.php');

$objets = mysqli_query(dbconnect(), "SELECT id_objet, nom_objet, id_categorie, id_membre FROM s2_objet");
$images = mysqli_query(dbconnect(), "SELECT id_image, id_objet, nom_image FROM s2_image_objet");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Galerie d'images</title>
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-4">
    <div class="container">
        <h2 class="mb-4">Images principales des objets</h2>
        <div class="row">
            <?php while ($img = mysqli_fetch_assoc($images)) { ?>
                <div class="col-md-3 mb-3">
                    <div class="card">
                        <img src="../assets/uploads/<?= $_SESSION['nom_image'] ?>" class="card-img-top" alt="Objet">
                    </div>
                </div>
            <?php } ?>
        </div>

        <h2 class="my-4">Autres images (supprimables)</h2>
        <div class="row">
            <?php while ($img = mysqli_fetch_assoc($images)) { ?>
                <div class="col-md-3 mb-3">
                    <div class="card">
                        <img src="../assets/uploads/<?= $_SESSION['nom_image'] ?>" class="card-img-top" alt="Autre image">
                        <div class="card-body text-center">
                            <form method="GET" action="supprimer_image.php" onsubmit="return confirm('Supprimer cette image ?')">
                                <input type="hidden" name="id" value="<?= $img['id'] ?>">
                                <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                            </form>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

</body>
</html>
