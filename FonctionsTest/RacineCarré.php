<?php

$n = rand (2, 10000);
echo "La racine carrée de $n est : </br>";
racine_carré($n);

function racine_carré ($nb){
    echo sqrt ($nb);
}