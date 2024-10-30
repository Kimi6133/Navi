<?php

$data = [
    "title" => "Mot de passe oublié"
];

///Vue
ob_start();

include("template/header.html");
?>
    <div class="d-flex justify-content-center align-items-center vh-100">
      <div class="row mt-5">&nbsp;</div>
        <div class="row mt-5">
            <div class="col-1">
                &nbsp;
            </div>
            <div class="col-6">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                      <div class="d-flex m-1 p-1">
                        <img src="assets/images/favicon.ico" style="height:40px; width: 40px; margin-right: 10px;" class="card-img-top" alt="Logo Navi">  
                        <h5 class="card-title">Mot de passe oublié</h5>
                      </div>
                      <form>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Adresse email</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="text-center">
                          <button type="submit" class="btn btn-primary">Réinitialiser</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="col-3">
                    &nbsp;
                </div>
        </div>
    </div>
<?php
include("template/footer.html");

