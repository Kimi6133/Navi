<?php

$data = [
    "title" => "Tableau de bord"
];

/// Vue 
ob_start();
?>

<!doctype html>
<html lang="fr">

<?php
include("template/header.html");
?>
<body>
<?php
include("template/navbar.html");

?>
  <!-- Contenu Principal ( garder seulement la navbar ) -->

<?php

include("template/footer.html");
?>


<?php
ob_end_flush();

// Retour programme principal