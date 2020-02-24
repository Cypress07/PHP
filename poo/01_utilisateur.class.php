<?php

class Utilisateur {
      private $nom ;
      private $prenom ;
      private $langue='french';
      private $timestamp ; 
        
public function __construct($prenom, $nom){
 $this->prenom=$prenom ;
 $this->nom=$nom ;
 $this->timestamp=time ();
}

public function __destruct() {
    
           echo "<strong><p>Suppression de $this->nom </strong></p>";
}

public function __toString() {
    return "__tostring = $this->nom - $this.prenom";
}

public function getNom(){
        return $this->nom;
}

public function setNom($nom){
        $this->nom = $nom;
}

public function setLangue($langue){
        $this->langue=$langue;
}

private function miseEnFormeTimestamp (){
     
   setlocale(LC_TIME, $this->langue);
   return strftime('%c', $this->timestamp);
}

public function informations(){
    $creation =$this->miseEnFormeTimestamp();    
    return "$this->prenom $this->nom - $creation";
}
}