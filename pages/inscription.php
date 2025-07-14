<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <form action="../traitement/traitement_inscription.php" method="POST">
        <input type="text" name="nom" placeholder="Entrez votre nom">
        <input type="date" name="date" placeholder="Entrez votre date de naissance">
        <input type="email" name="email" placeholder="Entrez votre email">
        <input type="password" name="password" placeholder="Entrez votre mot de passe">
        <input type="text" name="genre" placeholder="Entrez votre genre"> 
        <input type="text" name="ville" placeholder="Entrez votre ville">
        <input type="submit" value="Valider">   
    </form>
</body>
</html>