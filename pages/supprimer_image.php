<?php
require('../inc/functions.php');
$id = $_GET['id_image'];

$res = mysqli_query(dbconnect(), "SELECT * FROM s2_image_objet WHERE id_image = $id");
$img = mysqli_fetch_assoc($res);
$chemin = $img['nom_image'];

if (file_exists($chemin)) {
    unlink($chemin);
}

mysqli_query(dbconnect(), "DELETE FROM s2_image_objet WHERE id_image = $id");

header('Location: ' . $_SERVER['HTTP_REFERER']);
?>
