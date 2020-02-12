<?php

//EXEMPLE
//déclaration d'une fonction générant les chiffres de 1 à 5
function boucle_yield (){
    for ($i=1; $i <=5; $i++){
        //$i est préservé entre chaque production de valeur
        yield $i;
    }
}
//appel de la fonction 
$generateur = boucle_yield();
//affichage des valeurs
foreach ($generateur as $val) {
    echo $val." ";
    
}
