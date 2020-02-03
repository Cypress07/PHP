<?php

function calcul_ttc ($prix_ht){
    return $prix_ht*1.2;
}

$prix= 12 ;
$prix_ttc = calcul_ttc ($prix);
echo "$prix euros HT correspondent à $prix_ttc euros TTC<br/>";

function assemble_mot ($mot1, $mot2, $mot3){
    return $mot1." ".$mot2." ".$mot3 ."<br/>";
}

echo assemble_mot("Bonjour", "Jean", "Dupont");

function affiche_bonjour (){
    echo "Bonjour <br/>";
}

function assemble_mot2 ($mot1, $mot2, $mot3="Dupont"){
    $retour = $mot1." ".$mot2. " ".$mot3."<br/";
    return $retour;
}

echo assemble_mot("Bonjour", "Jean", "Dupont");

affiche_bonjour();

echo assemble_mot2("Bonjour", "Jean");
