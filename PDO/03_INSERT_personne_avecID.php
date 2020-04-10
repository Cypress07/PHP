<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
         try
        {
            $cnx = new PDO ('mysql:host=127.0.0.1:3308;dbname=_test', 'root','');
            $cnx->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $sql= "INSERT INTO Personne (Nom, Prenom, Age) VALUES ('OUZERA', 'Mikael', 39)";
            
            //Ajout des données dans la table personne
            $cnx->exec($sql);
            echo "L'identifiant de la dernière personne ajoutée est : ";
            echo $cnx->lastInsertId().":";
        } 
     catch (Exception $e) {
            die ('Erreur : '.$e->getMessage());
        }
        ?>
    </body>
</html>