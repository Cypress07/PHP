<?php
$nb=rand (3,170);

    function factorielle($n) 
    { 
       if($n === 0) 
    return 1;  
      else 
          return $n*factorielle($n-1); 
    }  
echo "La factorielle de '$nb' est : ".factorielle ($nb)."</br>";
