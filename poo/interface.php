<?php

interface lecture{
    function get();
}
interface ecriture{
    function put($valeur);
}

class uneClasse implements lecture, ecriture {
    private $x;
    
    public function get() {
        return $this->x;
    }
    public function put($valeur){
       $this->x = $valeur;
    }
}

$objet = new uneClasse();
$objet->put(123);
echo "{$objet->get() }<br />";