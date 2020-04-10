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
            
            $sql="INSERT INTO Personne (Nom, Prenom, Age) VALUES (:nom, :prenom, :age)";
            //Préparation de la requêt avec les marqueurs
            $res=$cnx->prepare($sql);
            $res->bindParam(':nom', $nom);
            $res->bindParam(':prenom', $prenom);
            $res->bindParam(':age', $age);
            $nom="Martineau";
            $prenom="Jean";
            $age=57;
            $res->execute();
            
            echo "L'identifiant de la dernière personne ajoutée est : ";
            echo $cnx->lastInsertId().":";
            $res->closeCursor();
        }
     catch (Exception $e) {
            die ('Erreur : '.$e->getMessage());
        }
        ?>
    </body>
</html>