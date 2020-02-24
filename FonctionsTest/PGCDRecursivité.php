<?php

$n= rand (2, 10000);
$p= rand (2, 10000);

echo "Le plus grand dénominateur commun à $n et $p est :"."</br>";

pgcd($n, $p);

function pgcd ($a, $b) {
      
    while ($b > 0) {
        $r = $a % $b;
        $a = $b;
        $b = $r;
    }
    echo $a;
}