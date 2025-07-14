<?php
require ('connection.php');

function insert_membre($nom,$email,$genre,$ville,$mdp,$date){
    $insert = "INSERT INTO s2_membre (nom,email,genre,ville,mdp,datedenaissance) VALUES ('$nom','$email','$genre','$ville','$mdp','$date')";  
    $query = mysqli_query(dbconnect(),$insert);
    return $query;
}

function select_membre(){
    $select = "SELECT * FROM s2_membre";  
    $query = mysqli_query(dbconnect(),$select);
    $result = [];
    while ($fetch = mysqli_fetch_assoc($query)) {
        $result[] = $fetch;
    }
    return $result;
}

function lister_objet(){
    $select = "SELECT * FROM s2_objet";  
    $query = mysqli_query(dbconnect(),$select);
    $result = [];
    while ($fetch = mysqli_fetch_assoc($query)) {
        $result[] = $fetch;
    }
    return $result;
}

function select_categorie_objet(){
    $select = "SELECT * FROM s2_categorie_objet";  
    $query = mysqli_query(dbconnect(),$select);
    $result = [];
    while ($fetch = mysqli_fetch_assoc($query)) {
        $result[] = $fetch;
    }
    return $result;
}
?>