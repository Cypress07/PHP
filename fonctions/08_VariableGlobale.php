<?php

$prenom = "Jean";
function affiche_mot(){
    global $prenom;
    echo $prenom;
}
affiche_mot();