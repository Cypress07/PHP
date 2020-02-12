<?php

function ajouter($parametre1, $parametre2) {
    return $parametre1 + $parametre2 ;
}
echo ajouter (4357, 6754). "</br>" ;

function soustraire ($parametre1, $parametre2){
    return $parametre1 - $parametre2;           
}
echo soustraire(5463, 432). "</br>" ;

function operation ($type_operation, $valeur1, $valeur2) {
return $type_operation ($valeur1, $valeur2);
}
echo "4357+6754=" .operation('ajouter', 4357,6754). "</br>" ;
echo "5463-432=" .operation('soustraire', 5463, 432). "</br>" ;