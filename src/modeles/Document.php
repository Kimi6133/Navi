<?php

class Document 
{
    // Attributs de la classe Document (adaptés au diagramme)
    private $id_document;
    private $nom;
    private $lien;
    private $num_fichier;
    private $nom_original_fichier;

    // Constructeur privé pour empêcher l'instanciation directe
    public function __construct($id = null, $nom = '', $lien = '', $num = 0, $nomOriginal = '') 
    {
        $this->id_document = $id;
        $this->nom = $nom;
        $this->lien = $lien;
        $this->num_fichier = $num;
        $this->nom_original_fichier = $nomOriginal;
    }

    // Méthodes de gestion des documents
    public function setIdDocument($id) {
        $this->id_document = $id;
    }

    public function getIdDocument() {
        return $this->id_document;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function getNom() {
        return $this->nom;
    }

    public function setLien($lien) {
        $this->lien = $lien;
    }

    public function getLien() {
        return $this->lien;
    }

    public function setNumFichier($num) {
        $this->num_fichier = $num;
    }

    public function getNumFichier() {
        return $this->num_fichier;
    }

    public function setNomOriginalFichier($nomOriginal) {
        $this->nom_original_fichier = $nomOriginal;
    }

    public function getNomOriginalFichier() {
        return $this->nom_original_fichier;
    }
}