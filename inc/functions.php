<?php
require ('connection.php');

function insert_membre($nom,$email,$genre,$ville,$mdp,$date){
    $insert = "INSERT INTO membre (nom,email,genre,ville,mdp,datedenaissance) VALUES ($nom,$email,$genre,$ville,$mdp,$date)";  
    $query = mysqli_query(dbconnect(),$insert);
    return $query;
}

function select_membre(){
    $select = "SELECT * FROM membre";  
    $query = mysqli_query(dbconnect(),$select);
    $result = [];
    while ($fetch = mysqli_fetch_assoc($query)) {
        $result[] = $fetch;
     
    }
    return $fetch;
}


?>