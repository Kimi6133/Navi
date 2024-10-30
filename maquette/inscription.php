<?php

$data = [
    "title" => "Inscription"
];

/// Vue 
ob_start();

include("template/header.html");
?>
<div class="d-flex justify-content-center align-items-center vh-100">
    <div class="form">
        <div class="d-flex justify-content-center align-items-center mb-4">
            <img src="assets/images/favicon.ico" style="height:40px; width: 40px; margin-right: 10px;" class="card-img-top" alt="Logo Navi">  
            <h2 class="card-title">Inscription</h5>
        </div>
        <form action="submit_registration.php" method="post">
            <div class="row mb-3">
                <div class="col-6">
                    <label for="firstname">Prénom :</label>
                    <input type="text" class="form-control" id="firstname" name="firstname" required>
                </div>
                <div class="col-6">
                    <label for="lastname">Nom :</label>
                    <input type="text" class="form-control" id="lastname" name="lastname" required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-12">
                    <label for="email">Email :</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-12">
                    <label for="password">Mot de passe :</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-12">
                    <label for="confirm_mdp">Confirmation de mot de passe :</label>
                    <input type="password" class="form-control" id="confirm_mdp" name="confirm_mdp" required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-12">
                    <label for="class">Classe / section :</label>
                    <input type="text" class="form-control" id="class" name="class" required>
                </div>
            </div>
            <div class="row">
                <div class="col-12 d-grid">
                    <button type="submit" class="btn btn-primary">S'inscrire</button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php

include("template/footer.html");

ob_end_flush();

// Retour programme principal