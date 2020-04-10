<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>DEV PHP MYSQL</title>
    </head>
    <body>
        <?php
        try
        {
            $cnx = new PDO ('mysql:host=127.0.0.1:3308;dbname=_test', 'root','');
            $cnx->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            //Récup des données de la table Personne
            $resultat = $cnx->query('SELECT Nom, Prenom FROM Personne');
            
            echo "Le nombre de personnes : ".$resultat->rowcount();
            
            //Affichage de chaques entrées une à une
            while ($donnees = $resultat->fetch())
            {
                    echo  "<br/> Nom : {$donnees ['Nom']} Prénom: {$donnees ['Prenom']} <br/>";
               
            }
                 $resultat->closeCursor(); //fermeture de la requête
        } catch (Exception $e) {
            die ('Erreur : '.$e->getMessage());
        }
        ?>
    </body>
</html>
