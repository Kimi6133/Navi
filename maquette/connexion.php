<?php

$data = [
    "title" => "Connexion"
];

/// Vue 
ob_start();

include("template/header.html");
?>
<div class="d-flex justify-content-center align-items-center vh-100">
<div class="form">
    <div class="d-flex justify-content-center align-items-center mb-4">
    <img src="assets/images/favicon.ico" style="height:40px; width: 40px; margin-right: 10px;" class="card-img-top" alt="Logo Navi">  
    <h2 class="card-title">Connexion</h5>
    </div>
    <form action="dashboard.php" method="POST">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Adresse Mail</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">Nous partagerons jamais votre adresse mail</div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Mot de passe </label>
        <input type="password" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Rester connecté</label>
    </div>
    <button type="submit" class="btn btn-primary">Se connecter</button>
    </form>
    <div class="d-block mx-5">
    <a href="mdp_oublie.php" class="">Mot de passe oublié ? </a>
    <a href="inscription.php" class="d-block">Se créer un compte</a>   
    </div>  
</div>
</div>


<?php

include("template/footer.html");

ob_end_flush();

// Retour programme principal