<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #f8f9fa;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        .inscription-box {
            background: white;
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 0 12px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
        }
    </style>
</head>
<body>

<div class="inscription-box">
    <h4 class="text-center mb-4">Créer un compte</h4>
    <form action="../traitement/traitement_inscription.php" method="POST">
        <div class="mb-2">
            <input type="text" name="nom" class="form-control" placeholder="Nom" required>
        </div>
        <div class="mb-2">
            <input type="date" name="date" class="form-control" required>
        </div>
        <div class="mb-2">
            <input type="email" name="email" class="form-control" placeholder="Email" required>
        </div>
        <div class="mb-2">
            <input type="password" name="password" class="form-control" placeholder="Mot de passe" required>
        </div>
        <div class="mb-2">
            <input type="text" name="genre" class="form-control" placeholder="Genre">
        </div>
        <div class="mb-3">
            <input type="text" name="ville" class="form-control" placeholder="Ville">
        </div>
        <div class="d-grid">
            <button type="submit" class="btn btn-success">S'inscrire</button>
        </div>
    </form>
</div>

</body>
</html>
