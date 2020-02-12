<?php

//AFFICHAG DES INFO PHP
/*echo phpversion();
phpinfo();
*/
//GENERER UN NOMBRE ALEATOIRE
echo rand()."<br />";
echo rand(10, 20) ."<br />";

//ARRONDIR UN NOMBRE DECIMAL
echo round (3.141592) ."<br/>";
echo round(3.779592,2)."<br/>";//2 chiffres après la virgule

//CREER UN IDENTIFIANT UNIQUE
echo "Id unique : ".uniqid().", "."<br/>";
echo "Id unique : ".uniqid().", "."<br/>";
echo "Id unique : ".uniqid()."<br/>";

//ENVOYER UN MAIL
$to = 'personne@example.com';
$subject = 'Sujet';
$message = 'message';
$headers = 'From: Webmaster@monsite.com'."\r\n".
        'Reply-To : webmaster@monsite.com'."\r\n".
        'MINE-Version : 1.0'."`\r\n";
    mail ($to, $subject, $message, $headers);
    
    //MAIL AU FORMAT HTML
$headers = 'From: Webmaster@monsite.com'."\r\n".
        'Reply-To : webmaster@monsite.com'."\r\n".
        'MINE-Version : 1.0'."\r\n";
    'Content-type: text/html; charset=utf-8'."\r\n";