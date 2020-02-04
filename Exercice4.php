<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
    $tab=array(6, 25, 35, 61);
    $tab2=array(12,24, 46);
    $somme=0; // initialisation de la somme
        
           
    $nb_tab=count ($tab); //taille du tableau1
    $nb_tab2=count ($tab2); //taille du tableau2
    for ($i=0; $i<$nb_tab; $i++){
        for ($j=0; $j<$nb_tab2; $j++){
            $somme=$somme + $tab[$i] * $tab2 [$j];
       }      
    }
    echo "La valeur S est : ".$somme;
        ?>
    </body>
</html>
