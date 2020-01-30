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
        define('NB',10);
        $tab=array();
        $tab2=array();
        $tabSomme=array();
        
        for ($i=1; $i<=NB; $i++) {
        $tab [$i]=$i;
        }
        for ($i=1; $i<=NB; $i++) {
        $tab2 [$i]=$i+NB;
        }
        for ($i=1; $i<=NB; $i++) {
        $tabSomme [$i]=$tab[$i] + $tab2[$i];
        }
        for ($i=1; $i<=NB; $i++){
            echo $tabSomme [$i] ."<br>";
        }
        ?>
    </body>
</html>
