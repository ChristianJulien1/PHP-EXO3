<?php

class Ville{
    private $nom;
    private $departement;
    
    public function __construct($nom, $departement) {
        $this->nom = $nom;
        $this->departement = $departement;
    }
    
    public function afficherVilleDepartement() {
        echo "La ville " . $this->nom . " est dans le département " . $this->departement;
    }
}

?>