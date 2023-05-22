<?php

class Personne{
    private $nom;
    private $prenom;
    private $adresse;
    
    public function __construct($nom, $departement) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->$adresse = $adresse;
    }
    
    public function afficherVilleDepartement() {
        echo "La ville " . $this->nom . " est dans le département " . $this->departement;
    }

    public function __destruct() {
        echo "L'objet Personne de " . $this->prenom . " " . $this->nom . " est détruit.\n";
    }

    public function getPersonne() {
        return "Nom : " . $this->nom . "\n Prénom : " . $this->prenom . "\n Adresse : " . $this->adresse;
    }

    public function setAdresse($nouvelleAdresse) {
        $this->adresse = $nouvelleAdresse;
    }
}

?>