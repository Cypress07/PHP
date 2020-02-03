<?php

function multiplier ($a, $b) {
    if (!is_numeric($a) || !is_numeric($b)){
        throw new Exception('Les deux paramètres doivent être des nombres.');
    }
    return $a * $b;
}

try // Essais des instructions stiuées dans ce bloc.
{
        echo multiplier(10, 3)."<br/>";
        echo multiplier('bonjour', 20) ."<br/>";
}
catch (Exception $ex) {//Exception levée

    echo 'Une exception s\'est produite. Message d\'erreur : ',
            $ex->getMessage();
}
finally {
        echo '<br/>';
        echo 'Fin'; //Fin du script
}
?>