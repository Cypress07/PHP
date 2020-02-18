<?php
 
$tab1 = array();
for ($i=1;$i<=10;$i++) {
    $tab1[$i]=rand(1,100);
    }
  
function echanger(&$tab, $i, $j)
{
   $tmp = $tab[$i];
   $tab[$i] = $tab[$j];
   $tab[$j] = $tmp;
}

$length=10;
while($length>0)
{
  $max = 1;
  for($i=1; $i<=$length; $i++) {
     if($tab1[$i]>$tab1[$max]) {
        $max = $i;
    }
  }
    echanger($tab1, $max, $length);
    $length--;
}
for ($i=1;$i<=10;$i++) { 
    echo $tab1[$i].",";
}
    
