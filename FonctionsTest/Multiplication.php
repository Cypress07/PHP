<?php

$n = rand (1, 10000);
echo "La table de multiplication de $n est : "."</br>";
multiplier ($n);  

function multiplier ($nb){
   for ($i=1 ; $i<=1000 ; $i++){
           echo $nb.' x '.$i.' = '.$nb*$i."</br>";
   }
}

