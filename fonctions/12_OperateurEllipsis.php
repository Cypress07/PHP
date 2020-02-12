<?php

//fonction avec un nombre quelconque de paramètres

function fonction_variable (...$parametres)
{
    echo "Le nombre de paramètres est : ".count($parametres)."</br>";
    //transformation du tableau en chaine de caractères
    echo "Les valeurs sont : ".implode(" ", $parametres). "</br>";
}

//Appel de la fonction
fonction_variable('Tigre');
fonction_variable('TIgre', 'Lion');
fonction_variable('Tigre', 'Lion', 'Dragon');


//fonctio de la concatenation avec 3 paramètres
function concatenation ($a, $b, $c)
{
    return $a." ".$b." ".$c."</br>";    
}
echo concatenation ('Mouton', 'Lion', 'Tigre');

$tableau1 = ['Lion', 'Tigre'];
//affichage du retour de la fonction de concatenation
echo concatenation ('Mouton', ...$tableau1);

//affichage du retour de la fonction de concatenation
echo concatenation ('Mouton', ...['Lion', 'Tigre']);

