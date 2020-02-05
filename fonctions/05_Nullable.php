<?php

function test (?string, $name): ?string {
    return $name;   
}

var_dump (test (null)); //appel de la fonction avec NULL
echo "<br/>";
var_dump (test ("Bonjour")); //appel de la fonciton avec une chaine de caractères