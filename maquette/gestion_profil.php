<?php

$data = [
    "title" => "Gestion Profil"
];

/// Vue 
ob_start();

include("template/header.html");
include("template/navbar.html");

?>
<!-- Contenu Principal -->
<div class="container mt-5">
  <!-- En-tête de la page -->
  <h2 class="text-center mb-4">Gestion de Profil</h2>

  <div class="row">
      <!-- Colonne de gauche pour afficher les informations -->
      <div class="col-md-4">
          <div class="card bg-light rounded-4">
              <div class="card-body text-center">
                  <!-- Image de profil -->
                  <img src="assets/images/user.png" alt="Photo de profil" class="img-fluid rounded-circle mb-3" width="150">
                  <h5 class="card-title">Nom Prénom</h5>
                  <p class="text-muted">BTS SIO SLAM</p>
                  <p class="text-muted">email@example.com</p>
              </div>
          </div>
      </div>

      <!-- Colonne de droite pour éditer les informations -->
      <div class="col-md-8">
          <div class="card bg-light rounded-4">
              <div class="card-body">
                  <form>
                      <!-- Nom -->
                      <div class="form-group mb-2">
                          <label for="nom">Nom</label>
                          <input type="text" class="form-control" id="nom" placeholder="Entrez votre nom">
                      </div>

                      <!-- Email -->
                      <div class="form-group mb-2">
                          <label for="email">Email</label>
                          <input type="email" class="form-control" id="email" placeholder="Entrez votre email">
                      </div>

                      <!-- Mot de passe -->
                      <div class="form-group mb-2">
                          <label for="motdepasse">Mot de passe</label>
                          <input type="password" class="form-control" id="motdepasse" placeholder="Entrez votre mot de passe">
                      </div>

                      <!-- Image de profil -->
                      <div class="form-group mb-2">
                          <label for="pdp">Photo de profil</label> <br>
                          <input type="file" class="form-control-file" id="pdp">
                      </div>

                      <!-- Bouton de mise à jour -->
                      <button type="submit" class="btn btn-success">Mettre à jour</button>
                  </form>
              </div>
          </div>
      </div>
  </div>
</div>

<?php

include("template/footer.html");

ob_end_flush();