<?php

class Utilisateur {
      private $nom ;
      private $prenom ;
      
        
public function __construct($prenom, $nom){
 $this->prenom=$prenom ;
 $this->nom=$nom ;
 
}

public function informations(){
    return "$this->prenom $this->nom";
}
}

class utilisateur_couleur extends utilisateur{
    
    private $couleurs;
    
    public function __construct($nom,$prenom,$couleurs)
 {
    parent::__construct($prenom, $nom) ;
    $this->couleurs = explode(", ", $couleurs);
    }
    
    public function couleurs(){
        return implode (", ", $this->couleurs);
    }
}

$moi = new utilisateur_couleur('John', 'DOE', 'bleu, blanc, rouge');

echo"{$moi->informations()}<br />";
echo"{$moi->couleurs()}<br />";