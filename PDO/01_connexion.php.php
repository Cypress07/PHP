<!DOCTYPE html>


<html>
    <head>
        <meta charset="UTF-8">
        <title>DEV PHP MySQL</title>
    </head>
    <body>
        <?php
        try{
            
            $cnx = new PDO ('mysql:host=127.0.0.1:3308;dbname=_test', 'root','',
                    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
                        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        
            echo "Connexion à la base de données réussie";
            
        } catch (Exception $ex) {
            die ('Erreur : ' .$ex->getMessage());
        }
        ?>
    </body>
</html>
