<?php

 $tab=['cador','Rémy','un','est','sql','en'];
 aleatoire($tab);
 
function aleatoire ($tab1) {
shuffle ($tab1);
echo implode (' ', $tab1)."</br>";
}