<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
     
        <title></title>
    </head>
    <body>
        <?php
       
       if (isset ($_GET['donnee'])){ 
        foreach ($_GET['donnee'] as $value){
        echo $value." ". '<br />';
        }
       }
         
        