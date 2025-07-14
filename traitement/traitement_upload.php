<?php 
session_start();
require('../inc/functions.php');
$uploadDir = '../assets/uploads/'; 
$maxSize = 2 * 1024 * 1024;
$allowedMimeTypes = ['image/jpeg', 'image/png', 'application/pdf']; 

if (!file_exists($uploadDir)) {
    if (!mkdir($uploadDir, 0755, true)) {
        die('Échec de la création du répertoire uploads');
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['fichier'])) { 
    $file = $_FILES['fichier']; 
    if ($file['error'] !== UPLOAD_ERR_OK) { 
        die('Erreur lors de l\'upload : ' . $file['error']); 
    } 
    
    if ($file['size'] > $maxSize) { 
        die('Le fichier est trop volumineux.');
    } 
    
    $finfo = finfo_open(FILEINFO_MIME_TYPE); 
    $mime = finfo_file($finfo, $file['tmp_name']); 
    finfo_close($finfo); 
    if (!in_array($mime, $allowedMimeTypes)) { 
        die('Type de fichier non autorisé : ' . $mime); 
    } 
    
    $originalName = pathinfo($file['name'], PATHINFO_FILENAME); 
    $extension = pathinfo($file['name'], PATHINFO_EXTENSION); 
    $newName = $originalName . '_' . uniqid() . '.' . $extension; 
    
    if (move_uploaded_file($file['tmp_name'], $uploadDir . $newName)) {
        echo "Fichier uploadé avec succès : ". $newName; 
        insert_image($newName);
        header('Location: ../pages/liste_images.php');
        $selectimg = select_image($newName);
        $_SESSION['nom_image'] = $selectimg['nom_image'];
    } 
    else { 
        echo "Échec du déplacement du fichier."; 
    } 
} else { 
    echo "Aucun fichier reçu."; 
}
?>