<?php

define('Gagne_Prix', true);
define('NE_Gagne_pas_Prix', false);
$essais = 0;
$gagnant = 0;
$gagnantPremierChoix = 0;
$choix = 0;
 

for ($i=1 ; $i<=10000 ; ++$i) {
    $scenario = [NE_Gagne_pas_Prix, NE_Gagne_pas_Prix, NE_Gagne_pas_Prix];
    
    $scenario[mt_rand(0, 2)] = Gagne_Prix;
 
    $choix = mt_rand(0, 2);
    if ($scenario[$choix] === Gagne_Prix) {
        $gagnantPremierChoix++;
    } else {
        $gagnant++;
    }
 
    $essais++;
}
 
echo 'Gains: ' . $gagnant . ' de ' . $essais . ' = ' . ($gagnant / $essais) . '% et le premier choix gagne ' . $gagnantPremierChoix . ' ' . ($gagnantPremierChoix / $essais) . '%' . PHP_EOL;