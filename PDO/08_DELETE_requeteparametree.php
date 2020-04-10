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
            
            $sql="DELETE FROM Personne where nom=:nom";
            //Préparation de la requêt avec les marqueurs
            $res=$cnx->exec($sql);
            $res>execute(array('nom' => 'MARTIN'));
            echo "La personne a été supprimée avec succès.";
            $res->closeCursor();
        }
     catch (Exception $e) {
            die ('Erreur : '.$e->getMessage());
        }
        ?>
    </body>
</html>