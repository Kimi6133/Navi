<?php

$data = [
    "title" => "Choix devoirs"
];

/// Vue 
ob_start();

include("template/header.html");
include("template/navbar.html");
?>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'Accueil</title>
    <!-- Lien vers Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5 text-center">

    <p>Veuillez choisir une option :</p>
    
    <!-- Bouton 1 -->
    <a href="devoirs.php" class="btn btn-primary btn-lg m-3">Devoirs à rendre</a>
    
    <!-- Bouton 2 -->
    <a href="historique_devoirs.php" class="btn btn-secondary btn-lg m-3">Historique devoirs</a>
</div>

<!-- Lien vers Bootstrap JS et les dépendances -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php

include("template/footer.html");

ob_end_flush();