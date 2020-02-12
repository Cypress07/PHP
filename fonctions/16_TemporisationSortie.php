<?php

ob_start(); //On utilise le tampon

//1ere facon d'ajouter du texteau buffer :
echo '1er texte dans le buffer <br/>';
?>

<!--2eme facon d'ajouter du texte au buffer : -->
<p>2eme texte dans le buffer.</p>

<?php
ob_en_flush (); //On vide le tampon et on retourne le contenu au navigateur
?>