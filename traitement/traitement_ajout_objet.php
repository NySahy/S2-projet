<?php
require('../inc/functions.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST['nom'];
    $cat = $_POST['categorie_id'];
    $images = $_FILES['images'];

    $dossier = '../uploads/';
    $paths = [];

    for ($i = 0; $i < count($images['name']); $i++) {
        if ($images['error'][$i] === 0) {
            $tmp = $images['tmp_name'][$i];
            $nom_fichier = uniqid() . '_' . $images['name'][$i];
            $chemin = $dossier . $nom_fichier;
            move_uploaded_file($tmp, $chemin);
            $paths[] = $chemin;
        }
    }

    $img_principale = $paths[0] ?? '../assets/images/defaut.jpg';

    mysqli_query(dbconnect(), "INSERT INTO s2_objet (nom_objet, image, categorie_id) 
        VALUES ('$nom', '$img_principale', '$cat')");

    $id_objet = mysqli_insert_id(dbconnect());

    for ($i = 1; $i < count($paths); $i++) {
        mysqli_query(dbconnect(), "INSERT INTO s2_image (id_objet, chemin) 
            VALUES ('$id_objet', '{$paths[$i]}')");
    }

    header("Location: ../pages/liste_objet.php");
}
?>
