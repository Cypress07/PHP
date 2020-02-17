<?php

$tab1 = array();
  
function echanger (&$tab, $i, $j)
{
   $temp= $tab[$i];
   $tab[$i] = $tab[$j];
   $tab[$j] = $temp ;

for ($i=1;$i<=10;$i++) {
    $tab1[$i]=rand(1,100);
}
  
  
$long=10;
while($long>0)
{
  $max = 1;
  for($i=1; $i<=$long; $i++) {
     if($tab1[$i]>$tab1[$max]) {
        $max = $i;
    }
  }
    echanger ($tab1, $max, $long);
   
  $long--;
}
  
for ($i=1;$i<=10;$i++) {
    echo $tab1[$i].", ";
}
