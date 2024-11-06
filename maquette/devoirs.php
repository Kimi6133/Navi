<?php

$data = [
    "title" => "Devoirs"
];

/// Vue 
ob_start();

include("template/header.html");
include("template/navbar.html");
?>
<div class="container mt-5">
    <h2 class="text-center mb-4">Déposez votre devoir</h2>

    <!-- Formulaire de dépôt de fichier -->
    <form id="depotForm" action="" method="POST" enctype="multipart/form-data" onsubmit="return showPopup()">
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
    <!-- Pop-up de confirmation -->
    <div id="popup" class="alert alert-success mt-4" style="display: none;">
        Votre devoir a été soumis avec succès !
    </div>
</div>

<script>
    function showPopup() {
        // Affiche la pop-up de confirmation
        document.getElementById('popup').style.display = 'block';
        
        // Réinitialise le formulaire après l'affichage de la pop-up
        setTimeout(function() {
            document.getElementById('popup').style.display = 'none'; // Cache la pop-up
            document.getElementById('fichier').value = ""; // Réinitialise le formulaire
        }, 3000);

        return false; // Empêche le rechargement de la page pour le test
    }
</script>


<?php

include("template/footer.html");

ob_end_flush();