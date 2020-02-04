<?php

declare (strict_types=1);

//déclaration d'une fonction retournant un type entier
function affiche(): int {
    return "1"; //la fonction retourne en fait une chaine de caractère
}
try {
    affiche();//appel de la fonction
} catch (TypeError $ex) {
    echo ($ex->getMessage());
}