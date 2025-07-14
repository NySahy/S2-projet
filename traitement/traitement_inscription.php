<?php 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   $user = $_POST['nom'];
   $date = $_POST['date'];
   $email = $_POST['email'];
   $password = $_POST['password'];
   $ville = $_POST['ville'];

   $insert = insert_membre($user, $email, $genre, $ville, $password, $date);
   
}
?>