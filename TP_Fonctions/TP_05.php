<?php
define ('nb', 20);
$a = array();

for ($i=1 ; $i<=nb/2 ; $i++) {
    $a[$i]=rand(1,nb);
    }
    var_dump($a);
    
    $b=array ();
    $compteur=0;
    
for ($i=1 ; $i<=nb ; $i++){
    if (!in_array($i, $a)){
    $compteur++;
    $b[$compteur]=$i;
    }
    }
   
    function cube ($n){
        $cube=pow($n, 3);
        return $cube;
     }
     
     ob_start();
     
    echo "<table border>";
    echo "<tr><td>Valeur</td><td>Cube</td></tr>";
    foreach ($b as $val){
        echo "<tr><td>".$val."</td><td>".cube($val)."</td></tr>";
    }
    echo "</table>";
    ob_end_flush();
?>
