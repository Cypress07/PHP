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
            
            $sql="UPDATE Personne SET Age = :age where Nom = :nom and Prenom = :prenom";
            //Préparation de la requêt avec les marqueurs
            $res=$cnx->prepare($sql);
            $res->execute(array('age'=>55, 'nom' => 'DUPOND', 'prenom' =>'Jean'));
            echo "La personne a été modifiée avec succès.";
            $res->closeCursor();
        }
     catch (Exception $e) {
            die ('Erreur : '.$e->getMessage());
        }
        ?>
    </body>
</html>