<?php

require_once "Ville.php";

$ville = new Ville("Dunkerque", "59");
$ville2 = new Ville("Boulogne sur Mer", "62");
$ville->afficherVilleDepartement();
$ville2->afficherVilleDepartement();

$personne = new Personne("Oui", "Oui", "123 Rue de la Ville");

$coordonnees = $personne->getPersonne();
echo $coordonnees;

$personne->setAdresse("456 Avenue du Quartier");
echo $personne->getPersonne();

?>