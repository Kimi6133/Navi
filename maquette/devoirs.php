<?php

$data = [
    "title" => "Devoirs"
];

/// Vue 
ob_start();

include("template/header.html");
include("template/navbar.html");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dépôt de Devoirs</title>
    <!-- Lien vers Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2 class="text-center mb-4">Déposez votre devoir</h2>

    <!-- Formulaire de dépôt de fichier -->
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="nom" class="form-label">Nom :</label>
            <input type="text" class="form-control" id="nom" name="nom" placeholder="Votre nom complet" required>
        </div>
        
        <div class="mb-3">
            <label for="email" class="form-label">Email :</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Votre email" required>
        </div>
        
        <div class="mb-3">
            <label for="fichier" class="form-label">Fichier du devoir (PDF uniquement) :</label>
            <input type="file" class="form-control" id="fichier" name="fichier" accept=".pdf" required>
        </div>
        
        <button type="submit" class="btn btn-primary">Soumettre</button>
    </form>
</div>

<!-- Lien vers Bootstrap JS et les dépendances -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


<?php

include("template/footer.html");

ob_end_flush();