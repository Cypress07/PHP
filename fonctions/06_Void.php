<?php

//fonction d'échange pouvant ne rien retourner
function echange(&$a, &$b): void{
  
    if ($a === $b) {
        return;
    }

    $tmp = $a;
    $a = $b;
    $b = $tmp;
}   

$x = 1;
$y = 2; 
var_dump (echange($x, $y), $x, $y); // appel de la fonction échange  
?>