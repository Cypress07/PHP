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
       
        $tab=array();
        for ($i=1; $i<10; $i++) {
        $tab[$i] = rand(1,100);
        }
        sort($tab);
        $valeurs = implode (" ; ",$tab);
    echo 'Les valeurs sont : ' .$valeurs.'<br>';
    
    ?>
    </body>
</html>
