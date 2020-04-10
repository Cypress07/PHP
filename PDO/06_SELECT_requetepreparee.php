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
            
            $sql= "SELECT Nom, Prenom FROM personne WHERE Age > :age AND Nom LIKE :nom";
            //Préparation de la requêt avec les marqueurs
            $res = $cnx->prepare($sql);
            $res->execute(array('age'=>35, 'nom' =>'DU%'));
            
            while ($ligne = $res->fetch())
            {
                echo 'Nom: '.$ligne['Nom'].', Prénom : '.$ligne['Prenom'].'<br/>';
            }
            
        } 
     catch (Exception $e) {
            die ('Erreur : '.$e->getMessage());
        }
        ?>
    </body>
</html>