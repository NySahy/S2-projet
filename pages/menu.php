<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
      <div class="container">
        <a class="navbar-brand" href="liste_objet.php">MonApp</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarMenu">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link" href="liste_objet.php">Accueil</a></li>
            <li class="nav-item"><a class="nav-link" href="ajout_objet.php">Ajouter un objet</a></li>
            <li class="nav-item"><a class="nav-link" href="liste_images.php">Images</a></li>
            <li class="nav-item"><a class="nav-link" href="fiche_membre.php?id=1">Mon profil</a></li>
          </ul>
        </div>
      </div>
    </nav>
</body>
</html>
