/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package tp_01;

import java.util.Scanner;

/**
 *
 * @author formation_gep
 */
public class MoyenneQuatre_boucles {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
    
    Scanner reader = new Scanner(System.in);    
    int n,somme=0;
    double moyenne;
    
    for (int i=1; i<=4; i++){
    System.out.print("Entrez un nombre entier :")   ;
    n = reader.nextInt();
    somme = somme + n ;        
     
//Calcul de la moyene
        moyenne = somme / 4.0;
        //Affichage du résultat
        System.out.println("La moyenne vaut : " + moyenne);   
    }
}
}