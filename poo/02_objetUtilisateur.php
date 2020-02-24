<?php

include ('01_utilisateur.class.php');

$ut = new utilisateur ('John', 'Doe');
$ut->setLangue ('English');
$ut->setNom (strtoupper($ut->getNom()));
echo $ut->informations(). "</br>";


$informations = (new utilisateur('Victor', 'Hugo'))->informations();

echo $informations;