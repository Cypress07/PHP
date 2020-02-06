<?php

function affiche_parametres ($parametre1, $parametre2) {
    echo "La valeur du premier est : ".func_get_arg(0)."<br/>";
    echo "La valeur du deuxieme argument est : ".func_get_arg(1)."<br/>";
}
affiche_parametres("Bonjour", "Robert");

//------------------------------------------------------------------------------

function affiche_nombre_parametres ($parametre1, $parametre2) {
    echo "Le nombre d'arguments est : ".func_num_args()."<br/>";
}
affiche_nombre_parametres("Bonjour", "Robert");

//------------------------------------------------------------------------------

function affiche_parametres2 ($parametre1, $parametre2) {

    $num_args = func_num_args();
    $arg_liste= func_get_args();
    for ($i=0 ; $i <$num_args ; $i++) {
        echo "L'argument $i est : " . $arg_liste [$i] ."<br/>\n";
      }
}
affiche_parametres2("Bonjour", "Robert");



function affiche_nombre_parametres2 ($parametre1, $parametre2) {
    echo "Le nombre d'arguments est : ".func_num_args();
}
    if (function_exists('affiche_nombre_parametres2')) {
       echo "La fonction existe." ."<br/>";
    } else {
       echo "La fonction n'existe pas.";
    } 
affiche_nombre_parametres("Bonjour", "Robert");


echo function_exists ('affiche_nombre _parametres2')?"Existe":"N'existe pas";


function incremente ($i) {
    $i++;
    var_dump (func_get_arg(0));
}
incremente(1);
