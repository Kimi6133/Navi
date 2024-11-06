<?php

$data = [
    "title" => "Tableau de bord"
];

/// Vue 
ob_start();

include("template/header.html");
include("template/navbar.html");

?>
  <!-- Contenu Principal ( garder seulement la navbar ) -->
<?php

include("template/footer.html");

ob_end_flush();