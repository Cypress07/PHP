<?php

//TABLEAUX NUMERIQUES
$tableau = array ('Jean', 'Robert', 'Paul','Joe', 'Alain');
//echo $tableau[0];

//Remplacer Robert par Nadia
$tableau[1]= 'Nadia' ;

//création tableau vide et affectation de valeurs
$tableau= array() ;
$tableau[0]= 'Jean';
$tableau[1]= 'Robert' ;
$tableau[2]= 'Paul' ;
$tableau[3]= 'Joe' ;
$tableau[4]= 'Alain' ;

//autre syntaxe

$tableau= array() ;
$tableau[]= 'Jean' ;
$tableau[]= 'Robert';
$tableau[]= 'Paul' ;
$tableau[]= 'Joe' ;
$tableau[]= 'Alain' ;

//autre syntaxe

$tableau= ['Jean', 'Robert', 'Paul', 'Joe' , 'Alain'] ;

//2 Tableaux associatifs
$tableau = array ('A1' => 'Jean', 'B4'=> 'Robert', 3=> 'Paul', 'Toto' =>'Joe', 'H' =>'Alain');

// Autre syntaxe

$tableau = array() ;
$tableau ['A1'] = 'Jean';
$tableau ['B4']='Robert';
$tableau [3]='Paul';
$tableau ['Toto']= 'Joe';      
$tableau ['H1']= 'Alain';

//Pertinence des clés
$personne=array();
$personne ['Nom'] = 'Martin';
$personne ['Prenom']= 'Monique' ;
$personne ['Age']= 50;
echo 'Age : ' .$personne ['Age'] .'<br>';

    //3 CONSTANTES DE TYPE TABLEAU
const COULEURS = array('rouge', 'vert', 'noir') ;
echo COULEURS [1] .'<br>';

define ('COLORS', array(
        'rouge',
        'vert',
        'noir',
    ));
echo COLORS [1] .'<br>';


//4 PARCOURS D'UN TABLEAU
// BOUCLE FOR
// création du tableau"

$tableau = array ('Jean', 'Robert', 'Paul', 'Joe', 'Alain');
//boucle sur le tableau
for ($i=0; $i<5; $i++) {
    echo $tableau [$i] .'<br>';
}

//AVEC LA FONCTION COUNT() OU SIZEOF()
//création du tableau
$tableau = array ('Jean', 'Robert', 'Paul', 'Joe', 'Alain');
//boucle du tableau
for ($i=0; $i<sizeof($tableau); $i++) {
   //affichage des valeurs du tableau concaténées
    //avec un saut de ligne
    echo $tableau [$i] .'<br>';
}

//BOUCLE foreach
//création du tableau
$tableau = array ('Jean', 'Robert', 'Paul', 'Joe', 'Alain');
//boucle sur le tableau
foreach ($tableau as $val) {
    //affichage des valeurs deu tableau concaténées
    //avec un saut de ligne
    echo $val.'<br>';
}

//Affichage des clés
//création du tableau
$tableau = array ('A1' => 'Jean', 'B4'=> 'Robert', 3=> 'Paul', 'Toto' =>'Joe',
    'H' =>'Alain');
//boucle sur le tableau
foreach ($tableau as $key =>$val) {
    echo 'Clé : ' .$key. ', valeur : ' .$val.'<br>';
}
//Affichage des valeurs
//création du tableau
$tableau = array ('A1' => 'Jean', 'B4'=> 'Robert', 3=> 'Paul', 'Toto' =>'Joe',
    'H' =>'Alain');
foreach ($tableau as $val) {
    //affichage des valeurs deu tableau concaténées
    //avec un saut de ligne
    echo 'Valeur : ' .$val.'<br>';
}

//Depusi PHP 7 foreach travaille sur une copie du tableau
// le pointeur du tableau n'est plus modifié pendant son parcours
//reste modifiable s'il est passé pa rréférence
$tab = [0];
foreach ($tab as &$val){
    var_dump ($val);
    $tab[1]=1;
}

//LA FONCTION print_r
//création tableau
$tableau = array ('A1' => 'Jean', 'B4'=> 'Robert', 3=> 'Paul', 'Toto' =>'Joe', 
                    'H' =>'Alain');
print_r($tableau);

//A LONGUEUR D'UN TABLEAU
//création d'un tableau

$tableau = array ('A1' =>'Jean', 'B4'=>'Robert', 3=>'Paul','Toto'=>'Joe',
    'H'=>'Alain');
$taille = count ($tableau);
echo 'La taille du tableau est : '.$taille;
if (in_array('Robert', $tableau)){
    echo 'Robert est dans le tableau';
}

//3eme param : false par défaut (ne tient pas compte du type
//création du tableau
$tableau = array ('10', '33', '55', '78');
if (in_array(33, $tableau, true)){ //ajout de true pour tenir compte du type
    echo '33 est dans le tableau';  
} else {
        echo '33 n est pas dans le tableau';
}

//C EXISTENCE D'UNE CLE
//création du tableau
$tableau = array ('A1' =>'Jean', 'B4'=>'Robert', 3=>'Paul','Toto'=>'Joe',
    'H'=>'Alain');
if (array_key_exists(3, $tableau)){
  echo 'La clé 3 est dans le tableau';  
}

//creation d'un tableau
$tableau = array ('Jean', 'Robert', 'Paul', 'Joe', 'Alain');
if (array_key_exists('4', $tableau)){
echo 'La clé 4 est dans le tableau et sa valeur est :' .$tableau[4].'<br>' ;
}

//D TRI D'UN TABLEAU

//sort () : trie les valeur de la plus petite à la plus grande
//creation du tableau
$tableau = array ('A1' =>'Jean', 'B4'=>'Robert', 3=>'Paul','Toto'=>'Joe',
    'H'=>'Alain');
sort($tableau);//tri du tableau 
foreach ($tableau as $cle=>$valeur){
 echo 'Clé : ' .$cle. ', valeur : ' .$valeur.'<br>';
}

//sort () : trie les valeur de la plus petite à la plus grande avec préservation de la clé
//creation du tableau
$tableau = array ('A1' =>'Jean', 'B4'=>'Robert', 3=>'Paul','Toto'=>'Joe',
    'H'=>'Alain');
asort($tableau);//tri du tableau avec preservation des cles
foreach ($tableau as $cle=>$valeur){
 echo 'Clé : ' .$cle. ', valeur : ' .$valeur.'<br>';
}

//arsort () : trie les valeur de la plus grande à la plus petite avec préservation de la clé
//creation du tableau
$tableau = array ('A1' =>'Jean', 'B4'=>'Robert', 3=>'Paul','Toto'=>'Joe',
    'H'=>'Alain');
arsort($tableau);//tri du tableau avec preservation des cles
foreach ($tableau as $cle=>$valeur){
 echo 'Clé : ' .$cle. ', valeur : ' .$valeur.'<br>';
}

//rsort () : trie les valeur de la plus grande à la plus petite
//creation du tableau
$tableau = array ('A1' =>'Jean', 'B4'=>'Robert', 3=>'Paul','Toto'=>'Joe',
    'H'=>'Alain');
rsort($tableau);//tri du tableau
foreach ($tableau as $cle=>$valeur){
 echo 'Clé : ' .$cle. ', valeur : ' .$valeur.'<br>';
}

//ksort () : trie les valeurs de clé de la plus petite à la plus grande
//creation du tableau
$tableau = array ('A1' =>'Jean', 'B4'=>'Robert', 3=>'Paul','Toto'=>'Joe',
    'H'=>'Alain');
ksort($tableau);//tri du tableau à partir des clés
foreach ($tableau as $cle=>$valeur){
 echo 'Clé : ' .$cle. ', valeur : ' .$valeur.'<br>';
}
//krsort () : trie les valeurs de clé de la plus grande à la plus petite
//creation du tableau
$tableau = array ('A1' =>'Jean', 'B4'=>'Robert', 3=>'Paul','Toto'=>'Joe',
    'H'=>'Alain');
krsort($tableau);//tri du tableau à partir de la clé
foreach ($tableau as $cle=>$valeur){
 echo 'Clé : ' .$cle. ', valeur : ' .$valeur.'<br>';
}

//array_search ():est une fonction equivalente à in_array. Elle permet de rechercher 
//creation du tableau
$tableau = array ('A1' =>'Jean', 'B4'=>'Robert', 3=>'Paul','Toto'=>'Joe',
    'H'=>'Alain');

$cle_element = array_search('Robert', $tableau);
    echo 'La valeur Robert est dans le tableau et sa clé est : '.$cle_element .'<br>' ;

//AUTRE EXEMPLE
//creation du tableau
    $tableau = array ('Jean', 'Robert', 'Paul', 'Joe', 'Alain');
    $cle_element = array_search('Robert', $tableau);
    echo 'La valeur Robert est dans le tableau et sa clé est : '.$cle_element .'<br>' ;
    
//F DECOUPER UNE CHAINE DANS UN TABLEAU
//explode() permet de découper une chaine dans un tableau en utilisant un separateur
$ensemble ='1;2;3;4;5';
$tableau=explode(";", $ensemble);
echo "La premiere valeur du tableau est : ".$tableau[0]."<br>";
echo "La dernière valeur du tableau est : ".$tableau[count($tableau)-1]."<br>";

$ensemble = "1-2-3-4-5";
$tableau = explode ("-", $ensemble);
echo "Les valeurs du tableau sont :";
foreach ($tableau as $cle=>$valeur){
echo  $valeur.';';
}

//G REGROUPER LES VALEURS D'UN TALBEAU DANS UNE CHAINE
//implode () PERMET DE REGROUPER LES VALEURS D'UN TABLEAU DANS UNE CHAINE EN UTILISANT
//UN SEPARATEUR

$tableau = array ("Jean", "Robert", "Paul");
$comma_separated = implode (" ; ", $tableau);
echo "Le noms sont : " .$comma_separated;

//H DECOUPER UNE CHAINE EN MORCEAUX DE LONGUEUR FIXE
//str_split() permet de découper une chaine en morceaux de longueur fixe dans
//paramètre indaiquent la taille en morceaux de chaine

$ensemble ="1;2;3;4;5";
$tableau = str_split($ensemble, 2);
echo "Les éléments sont : ";
foreach ($tableau as $valeur){
echo $valeur. " ";
}

//I Ajouter des éléments à la fin du tableau
//array_push () permet d'ajouter un ou plusieurs éléments à la fin du tableau
$tableau = array("Jean", "Robert", "Paul");
array_push($tableau, "Joe", "Alain");
echo $tableau [4];

//J SUPPRESSION D'UN ELEMENT A LA FIN DU TABLEAU

$tableau =array ("Jean", "Robert", "Paul");
$element = array_pop ($tableau);
echo "Le nom supprimé est : " .$element ."<br>" ;
 
//array_rand () permet de sélectionner une ou plusieurs valeurs aléatoires
//et retourner les clés correspondantes

$tableau =array ("Jean", "Robert", "Paul");
$cle_aleatoire = array_rand ($tableau);
echo "Nom au hasard : " .$tableau [$cle_aleatoire] ."<br>";

$tab = array ("Jean", "Robert", "Paul");    
$tab_cles_aleatoires = array_rand ($tab, 2);
echo "Premier nom : " .$tableau [$tab_cles_aleatoires[0]] ."<br>";
echo "Second nom  : " .$tableau [$tab_cles_aleatoires[1]] ."<br>";


 