<?php

class uneClasse {
    private $x;
    
    static private $nombre =0;
    const DEFAUT = 'X';
    
    static public function nombreObjets(){
        return uneClasse::$nombre;
    }
    
    public function __construct($valeur = uneClasse::DEFAUT) {
        $this->x = $valeur;
        uneClasse::$nombre++;
        echo "Création de l'objet : $this->x<br />";     
    }
    
    public function __destruct(){
        uneClasse::$nombre--;
        echo "Supression de l'objet : $this->x<br />";   
    }
    
}

$inconnu = new uneClasse();
$abc = new uneClasse('ABC');
echo uneClasse::nombreObjets(),' objet(s)<br />';
unset($inconnu);
echo uneClasse::nombreObjets(),' objet(s)<br />';
