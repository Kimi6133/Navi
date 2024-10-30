<?php

$data = [
    "title" => "Mot de passe oublié"
];

///Vue
ob_start();

include("template/header.html");
?>
<div class="d-flex justify-content-center align-items-center vh-100 bg-light">
  <div class="form">
    <div class="d-flex justify-content-center align-items-center mb-4">
      <img src="assets/images/favicon.ico" style="height:40px; width: 40px; margin-right: 10px;" class="card-img-top" alt="Logo Navi">  
      <h5 class="card-title">Mot de passe oublié</h5>
    </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Adresse Mail</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      
      <button type="submit" class="btn btn-primary">réinitialiser</button>
  </div>
</div>

<?php
include("template/footer.html");

