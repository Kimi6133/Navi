<?php

$data = [
    "title" => "Choix devoirs"
];

/// Vue 
ob_start();

include("template/header.html");
include("template/navbar.html");
?>
<div class="container mt-5 text-center">

    <p>Veuillez choisir une option :</p>
    
    <!-- Bouton 1 -->
    <a href="devoirs.php" class="btn btn-primary btn-lg m-3">Devoirs à rendre</a>
    
    <!-- Bouton 2 -->
    <a href="historique_devoirs.php" class="btn btn-secondary btn-lg m-3">Historique devoirs</a>
</div>

<?php

include("template/footer.html");

ob_end_flush();