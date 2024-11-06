<?php

$data = [
    "title" => "Historique devoirs"
];

/// Vue 
ob_start();

include("template/header.html");
include("template/navbar.html");
?>
<div class="container mt-5">
    <h2 class="text-center mb-8">Historique des Devoirs Rendus</h2>

    <table class="table table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nom du professeur</th>
                <th>Matière</th>
                <th>Nom du fichier</th>
                <th>Date de rendu</th>
                <th>Date corriger</th>
                <th>Note</th>
                <th>Commentaire</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Fabrice Guichard</td>
                <td>SLAM</td>
                <td><a href="devoirs/devoir_jean.pdf" target="_blank">devoir_jean.pdf</a></td>
                <td>2024-10-01 14:30</td>
                <td>2024-20-01 15:00</td>
                <td>Non défini</td>
                <td>Claquer au sol</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Fabrice Guichard</td>
                <td>SLAM</td>
                <td><a href="devoirs/devoir_marie.pdf" target="_blank">devoir_marie.pdf</a></td>
                <td>2024-10-03 09:15</td>
                <td>2024-20-01 15:00</td>
                <td>Non défini</td>
                <td>Refait ta vie</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Fabrice Guichard</td>
                <td>SLAM</td>
                <td><a href="devoirs/devoir_pierre.pdf" target="_blank">devoir_pierre.pdf</a></td>
                <td>2024-10-05 16:45</td>
                <td>2024-20-01 15:00</td>
                <td>Non défini</td>
                <td>Meurt</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Fabrice Guichard</td>
                <td>SLAM</td>
                <td><a href="devoirs/devoir_lucie.pdf" target="_blank">devoir_lucie.pdf</a></td>
                <td>2024-10-07 11:00</td>
                <td>2024-20-01 15:00</td>
                <td>Non défini</td>
                <td>VIens me bouffer les couilles</td>
            </tr>
            <tr>
                <td>5</td>
                <td>Fabrice Guichard</td>
                <td>SLAM</td>
                <td><a href="devoirs/devoir_antoine.pdf" target="_blank">devoir_antoine.pdf</a></td>
                <td>2024-10-10 13:30</td>
                <td>2024-20-01 15:00</td>
                <td>Non défini</td>
                <td>GG</td>
            </tr>
        </tbody>
    </table>
</div>

<?php

include("template/footer.html");

ob_end_flush();