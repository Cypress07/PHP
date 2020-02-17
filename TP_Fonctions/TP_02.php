<?php

$tableau1 = array();
  
//Fonction pour échanger la valeur dans un tableau
//Le tableau est passé par référence
function echanger(&$tableau, $i, $j)
{
   $temporaire = $tableau[$i];
   $tableau[$i] = $tableau[$j];
   $tableau[$j] = $temporaire;
}
  
//remplissage d’un tableau de 10 valeurs aléatoires entre 1 et 100
for ($i=1;$i<=10;$i++) {
    $tableau1[$i]=rand(1,100);
}
  
  
$longueur=10;
while($longueur>0)
{
  // recherche de la plus grande valeur du tableau
  $maximum = 1;
  for($i=1; $i<=$longueur; $i++) {
     if($tableau1[$i]>$tableau1[$maximum]) {
        $maximum = $i;
    }
  }
  //échange du maximum avec le dernier élément
    echanger($tableau1, $maximum, $longueur);
   
  // Traitement du reste du tableau
  $longueur--;
}
  
//affichage du tableau
for ($i=1;$i<=10;$i++) { //tableau de 1 à 10
    echo $tableau1[$i].", ";
}