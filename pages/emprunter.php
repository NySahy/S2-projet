<?php
    require('../inc/functions.php');

    $objets = lister_objet();

    $selected_obj = emprunter_objet($objets['id_objet']);

    $emprunt = $_GET['emp'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="emprunter.php" method="post">
        <input type="date" name="debut">
        <input type="date" name="retour">
    </form>
</body>
</html>