<?php
require('../inc/functions.php');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   $user = $_POST['nom'];
   $date = $_POST['date'];
   $email = $_POST['email'];
   $genre = $_POST['genre'];
   $password = $_POST['password'];
   $ville = $_POST['ville'];

   insert_membre($user, $email, $genre, $ville, $password, $date);
   
   header('Location: ../pages/login.php');
}
?>

