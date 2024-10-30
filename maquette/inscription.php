<?php

$data = [
    "title" => "Inscription"
];

/// Vue 
ob_start();

include("template/header.html");
?>
<style>
    .registration-form {
        width: 100%;
        max-width: 300px;
        padding: 20px;
        background-color: #8c8c8d;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(32, 3, 251, 0.1);
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
</style>
<body class="d-flex justify-content-center align-items-center vh-100 bg-light">
<div class="registration-form">
    <h2 class="text-center mb-4">Inscription</h2>
    <form action="submit_registration.php" method="post">
        <div class="row mb-3">
            <div class="col-6">
                <label for="firstname">Prénom :</label>
                <input type="text" class="form-control" id="firstname" name="firstname" required>
            </div>
        <!-- </div>
        <div class="row mb-3"> -->
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

<?php

include("template/footer.html");

ob_end_flush();

// Retour programme principal