<?php

include ('Chaine.php');

   $str=new Chaine("Bonjour");
   echo $str->length; // Retourne 7
   echo $str->charAt(0); // Retourne B
   echo $str->indexOf("B"); // Retourne 0
   echo $str->indexOf("x"); // Retourne -1
   echo $str->indexOf("o",2); // Retourne 4;
   echo $str->substring(0,3); // Retourne Bon
   print_r($str->split("o")); // Retourne Array([0]=>B[1]=>nj[2]=>ur)
   echo $str->toUpperCase(); // Retourne BONJOUR
   echo $str->toLowerCase(); // Retourne bonjour
?>