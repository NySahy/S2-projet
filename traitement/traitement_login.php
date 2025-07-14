<?php
require('../inc/functions.php');
   if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   $email = $_POST['email'];
   $password = $_POST['password'];

   $insert = select_membre();
   
   header('Location: ../pages/liste_objet.php');
}
?>