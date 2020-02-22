<?php

$a= rand (2, 10000);
$b= rand (2, 10000);

echo "Le plus grand dénominateur commun à $a et $b est :"."</br>";

pgcd($a, $b);

function pgcd ($a, $b) {
      
    while ($b > 0) {
        $r = $a % $b;
        $a = $b;
        $b = $r;
    }
    echo $a;
}