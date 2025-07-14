<?php
require('../inc/functions.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    insert_membre(
        $_POST['nom'],
        $_POST['email'],
        $_POST['genre'],
        $_POST['ville'],
        $_POST['password'],
        $_POST['date']
    );
    header('Location: ../pages/login.php');
}
?>
