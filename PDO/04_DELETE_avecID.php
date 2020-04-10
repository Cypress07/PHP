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
            
            $sql= "delete from Personne where id=1";
            $cnx->exec($sql);
            echo "Personne a été supprimée avec succès.";
        } 
     catch (Exception $e) {
            die ('Erreur : '.$e->getMessage());
        }
        ?>
    </body>
</html>