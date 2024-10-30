<?php

$data = [
    "title" => "Documents"
];

/// Vue 
ob_start();

include("template/navbar.html");
include("template/header.html");
?>
<main class="container my-5">
    <div class="d-flex justify-content-center">
        <h1>Répertoire de documents de projet</h1>
    </div>
    <div class="d-flex justify-content-center">
        <p>Déposez et répertoriez les documents de votre projet en un seul endroit</p>
    </div>
    <!-- Section de dépôt de fichier -->
    <section class="mb-5">
      <h2 class="h4">Déposez un document</h2>
      <form>
        <div class="mb-3">
          <label for="documentTitle" class="form-label">Titre du document</label>
          <input type="text" class="form-control" id="documentTitle" placeholder="Entrez le titre du document" required>
        </div>
        <div class="mb-3">
          <label for="documentFile" class="form-label">Sélectionnez un fichier</label>
          <input type="file" class="form-control" id="documentFile" required>
        </div>
        <button type="submit" class="btn btn-primary">Déposer le document</button>
      </form>
    </section>

    <!-- Section de recherche -->
    <section class="mb-5">
      <h2 class="h4">Recherche de documents</h2>
      <form class="row g-3">
        <div class="col-md-8">
          <input type="text" class="form-control" placeholder="Rechercher un document par titre ou mot-clé">
        </div>
        <div class="col-md-4">
          <button type="submit" class="btn btn-secondary w-100">Rechercher</button>
        </div>
      </form>
    </section>

    <!-- Liste des documents déposés -->
    <section>
      <h2 class="h4">Documents déposés</h2>
      <table class="table table-striped mt-3">
        <thead>
          <tr>
            <th scope="col">Titre</th>
            <th scope="col">Date de dépôt</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          <!-- Exemple de document - Remplissez dynamiquement avec du JavaScript ou côté serveur -->
          <tr>
            <td>Exemple de document</td>
            <td>2024-10-30</td>
            <td>
              <button class="btn btn-sm btn-info me-2">Voir</button>
              <button class="btn btn-sm btn-danger">Supprimer</button>
            </td>
          </tr>
        </tbody>
      </table>
    </section>
  </main>