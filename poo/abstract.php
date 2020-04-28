<?php

abstract class classeMere{
    protected $x;
   
    public function __get() {
        return "GET = $this->x";
}

abstract public function put($valeur);
}
class classeFille extends classeMere{
   
    public function put($valeur){
        $this->x = $valeur;
    }
}

$objet= new classeFille();
$objet->put(123);
echo "{$objet->get()} <br />";