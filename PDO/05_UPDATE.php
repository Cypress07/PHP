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
            
            $sql= "update Personne set Nom ='Durand', Prenom='Kevin', Age=37 where id=8";
            $nbre=$cnx->exec($sql);
            echo "Nombre de personnes modifiées : ".$nbre;
        } 
     catch (Exception $e) {
            die ('Erreur : '.$e->getMessage());
        }
        ?>
    </body>
</html>