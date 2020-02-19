<?php
define ('nb', 10);
$tab = array();
for ($i=1;$i<=nb;$i++) {
    $tab[$i]=rand(1,100);
    }
  
function echanger(&$tab, $i, $j)
{
   $tmp = $tab[$i];
   $tab[$i] = $tab[$j];
   $tab[$j] = $tmp;
}  

  for($nbr=nb; $nbr>1; $nbr--) {
      $max = 1;
    for ($i=2 ; $i<=$nbr; $i++){
      if($tab[$i]>$tab[$max]) {
        $max = $i;
    }
  }
  echanger($tab, $max, $nbr);
} 
    echo implode (",", $tab);