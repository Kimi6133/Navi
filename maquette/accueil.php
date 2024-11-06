<?php

$data = [
    "title" => "Documents"
];

/// Vue 
ob_start();

include("template/navbar.html");
include("template/header.html");
?>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom rounded styling for cards */
        .card {
            border-radius: 15px; /* Adds smooth rounded corners */
            overflow: hidden; /* Ensures child elements don’t overflow rounded corners */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Optional shadow for a cleaner look */
            height: 500px; /* Set fixed height for all cards */
            width: 300px;
            margin-top: 80px;
        }
        .card-header {
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
        }
        .card-body {
            height: calc(100% - 56px); /* Full height minus header */
            overflow-y: auto; /* Adds vertical scrollbar if content is too long */
            padding: 15px;
            background-color: white;
        }
    </style>

    <!-- Main Content Centered Vertically and Horizontally -->
    <div class="container d-flex justify-content-center align-items-center">
        <div class="row">
            <!-- Dépôts récents -->
            <div class="col-md-4">
                <div class="card rounded-lg">
                    <div class="card-header bg-primary text-white">
                        Dépôts récents
                    </div>
                    <div class="card-body">
                        <p>Document 1<br><small class="text-muted">Matière 1</small></p>
                        <p>Document 2<br><small class="text-muted">Matière 2</small></p>
                        <p>Document 3<br><small class="text-muted">Matière 3</small></p>
                        <p>Document 4<br><small class="text-muted">Matière 4</small></p>
                        <p>Document 5<br><small class="text-muted">Matière 5</small></p>
                    </div>
                </div>
            </div>

            <!-- Devoirs à rendre -->
            <div class="col-md-4">
                <div class="card rounded-lg">
                    <div class="card-header bg-primary text-white">
                        Devoirs à rendre
                    </div>
                    <div class="card-body">
                        <p>Devoir à rendre 1<br><small class="text-muted">Matière 1</small><br><small class="text-muted">Date rendu 1</small></p>
                        <p>Devoir à rendre 2<br><small class="text-muted">Matière 2</small><br><small class="text-muted">Date rendu 2</small></p>
                        <p>Devoir à rendre 3<br><small class="text-muted">Matière 3</small><br><small class="text-muted">Date rendu 3</small></p>
                        <p>Devoir à rendre 4<br><small class="text-muted">Matière 4</small><br><small class="text-muted">Date rendu 4</small></p>
                        <p>Devoir à rendre 5<br><small class="text-muted">Matière 5</small><br><small class="text-muted">Date rendu 5</small></p>
                        <p>Devoir à rendre 6<br><small class="text-muted">Matière 6</small><br><small class="text-muted">Date rendu 6</small></p>
                    </div>
                </div>
            </div>

            <!-- Notes -->
            <div class="col-md-4">
                <div class="card rounded-lg">
                    <div class="card-header bg-primary text-white">
                        Notes
                    </div>
                    <div class="card-body">
                        <p>Note 1<br><small class="text-muted">Matière 1</small></p>
                        <p>Note 2<br><small class="text-muted">Matière 2</small></p>
                        <p>Note 3<br><small class="text-muted">Matière 3</small></p>
                        <p>Note 4<br><small class="text-muted">Matière 4</small></p>
                        <p>Note 5<br><small class="text-muted">Matière 5</small></p>
                        <p>Note 6<br><small class="text-muted">Matière 6</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
