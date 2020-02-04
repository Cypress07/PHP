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
           $tab_Bannieres = array (
             1 => array ('https://www.porsche.com',
                         'img/banniere1.jpg',
                         'Voiture allemande'),
           
             2 => array ('https://www.astonmartin.com', 
                         'img/banniere2.jpg',
                         'Voiture anglaise'),
        
             3 => array ('https://www.ferrari.com',
                        'img/banniere3.jpg',
                        'Voiture italienne'));
           
            $choix = array_rand($tab_Bannieres);
            
            echo '<a href="', $tab_Bannieres[$choix][0], '">';
            echo '<img src="', $tab_Bannieres[$choix][1],
                   '"alt="', $tab_Bannieres[$choix][2],'">';
            echo '</a>';
  
    ?>
    </body>
</html>
