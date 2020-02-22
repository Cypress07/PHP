<?php

define('HAS_PRICE', true);
define('HAS_NO_PRICE', false);
$essais    = 0;
$gagnant      = 0;
$gagnantPremierChoix = 0;
$choix     = 0;
 
/**
 * Bottom line, you play against being wrong the first time
 */
for ($i=0 ; $i<=10000 ; ++$i) {
    $scenario = [HAS_NO_PRICE, HAS_NO_PRICE, HAS_NO_PRICE];
    /**
     * Set random scenario element to true
     */
    $scenario[mt_rand(0, 2)] = HAS_PRICE;
 
    /**
     * Premier choix - 1 in 3
     */
    $choix = mt_rand(0, 2);
    if ($scenario[$choix] === HAS_PRICE) {
        $gagnantPremierChoix++;
    } else {
        $gagnant++;
    }
 
    $essais++;
}
 
echo 'Gains: ' . $gagnant . ' de ' . $essais . ' = ' . ($gagnant / $essais) . '% et le premier choix gagne ' . $gagnantPremierChoix . ' ' . ($gagnantPremierChoix / $essais) . '%' . PHP_EOL;