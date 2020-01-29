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
    <TABLE border="1" width="100%">
        <TR>
             <TD width="50%">Clé
             <TD width="50%">Valeur
        <TR>   
             <TD width="50%">DUPONT
            <TD width="50%"> 
        <TR>
            <TD width="50%">DURAND
            <TD width="50%">
    </TABLE>

        <?php
        $tableauDupont = ['Prénom' => 'PAUL',
        'Profession' => 'Ministre' ,
        'Age' => 50];

        $tableauDurand = ['Prénom' => 'ROBERT',
        'Profession' => 'Agriculteur',
        'Age'=> 45];
        
        $tab_personne['Dupont'] = $tableauDupont;
        $tab_personne['Durand'] = $tableauDurand;               
        ?>
     
    </body>
</html>
