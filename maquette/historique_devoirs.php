<?php

$data = [
    "title" => "Historique devoirs"
];

/// Vue 
ob_start();

include("template/header.html");
include("template/navbar.html");
?>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historique des Devoirs Rendus</title>
    <!-- Lien vers Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2 class="text-center mb-4">Historique des Devoirs Rendus</h2>

    <table class="table table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nom du professeur</th>
                <th>Matière</th>
                <th>Nom du fichier</th>
                <th>Date de rendu</th>
                <th>Note</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Fabrice Guichard</td>
                <td>SLAM</td>
                <td><a href="devoirs/devoir_jean.pdf" target="_blank">devoir_jean.pdf</a></td>
                <td>2024-10-01 14:30</td>
                <td>Non défini</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Fabrice Guichard</td>
                <td>SLAM</td>
                <td><a href="devoirs/devoir_marie.pdf" target="_blank">devoir_marie.pdf</a></td>
                <td>2024-10-03 09:15</td>
                <td>Non défini</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Fabrice Guichard</td>
                <td>SLAM</td>
                <td><a href="devoirs/devoir_pierre.pdf" target="_blank">devoir_pierre.pdf</a></td>
                <td>2024-10-05 16:45</td>
                <td>Non défini</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Fabrice Guichard</td>
                <td>SLAM</td>
                <td><a href="devoirs/devoir_lucie.pdf" target="_blank">devoir_lucie.pdf</a></td>
                <td>2024-10-07 11:00</td>
                <td>Non défini</td>
            </tr>
            <tr>
                <td>5</td>
                <td>Fabrice Guichard</td>
                <td>SLAM</td>
                <td><a href="devoirs/devoir_antoine.pdf" target="_blank">devoir_antoine.pdf</a></td>
                <td>2024-10-10 13:30</td>
                <td>Non défini</td>
            </tr>
        </tbody>
    </table>
</div>

<!-- Lien vers Bootstrap JS et les dépendances -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php

include("template/footer.html");

ob_end_flush();