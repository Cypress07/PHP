/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package image;

import java.util.Scanner;

/**
 *
 * @author formation_gep
 */
public class Image {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
    Scanner reader = new Scanner(System.in);    
    
    final int nl=5, nc=6; 
    int [][] matrice = {
        {25, 23, 100, 100, 100, 100},
        {44, 45, 50, 100, 100, 100},
        {65, 65, 50, 20, 100, 100},
        {90, 62, 100, 5, 0, 0},
        {60, 87, 100, 0, 100, 100}    
};
        affiche (matrice);
         
        //test de la fonction Mystere
        matrice= Mystere(matrice);
        affiche (matrice);
        
        matrice=AccentueContraste (matrice);
        affiche (matrice);
    }

   public static int[][] Mystere(int [][] matrice) {
       
            for (int i = 0; i <5; i++){
                for(int j = 0; j<6 ; j++)
                    matrice[i][j] = 100-matrice[i][j];
            }
            return matrice ;
        }

 public static int Moyenne(int moyenne) {

 int i, j, somme=0;
  final int nl=5, nc=6; 
    int [][] matrice = {
        {25, 23, 100, 100, 100, 100},
        {44, 45, 50, 100, 100, 100},
        {65, 65, 50, 20, 100, 100},
        {90, 62, 100, 5, 0, 0},
        {60, 87, 100, 0, 100, 100}
        
};
   for (i=0 ; i<nl ; i++){
        for (j=0 ; j<nc ; j++){
    somme = somme + matrice[i][j];
    }
    }
    moyenne = somme / (nl*nc) ; 
 return moyenne;
    }
  public static int [][] DimConstraste(int [][] matrice) {
    
    int moyenne = Moyenne (matrice);
    
    int correction;
    for (int i=0; i<5; i++){
      for (int j=0; j<6; j++){
          correction = (matrice[i][j]-moyenne)/2;
          matrice[i][j]=matrice [i][j]-correction;
      }
  }
  return matrice;
  }
  
public static void affiche (int [][]matrice) {

for (int i=0; i<5; i++) {
    System.out.println();
    for (int j=0; j<6; j++){
        System.out.println (matrice[i][j] +"t");
    }
    }
        System.out.println (); 
}       
 public static int[][] AccentueContraste (int [][] matrice) {

for (int i=0; i<5; i++) {
    for (int j=0; j<6; j++){     
        if (matrice[i][j] > 75)
            matrice [i][j]=100;
        else if (matrice [i][j] >50)
            matrice [i][j]=75;
        else
            matrice[i][j]=matrice [i][j]/2;
    }
}
return matrice;
 }
}