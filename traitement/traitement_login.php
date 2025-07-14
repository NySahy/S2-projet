<?php
require('../inc/functions.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $membres = select_membre();

    foreach ($membres as $membre) {
        if ($membre['email'] === $email && $membre['mdp'] === $password) {
            header('Location: ../pages/liste_objet.php');
            exit;
        }
    }

    echo "Identifiants incorrects";
}
?>
