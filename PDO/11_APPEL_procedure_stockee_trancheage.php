<html>
    <head>
        <meta charset="UTF-8">
        <title>DEV PHP MySQL</title>
    </head>
    <body>
        <?php
         try
        {
            $cnx = new PDO ('mysql:host=127.0.0.1:3308;dbname=_test', 'root','');
            $cnx->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $statememt = $cnx->prepare("CALL trancheage (:agemin, :agemax, @nb); select @nb as nb");
            $agemin ='20';
            $agemax ='40';
            
            $statement->bindParam(':agemin', $agemin);
            $statement->bindParam(':agemin', $agemax);
            
                                  
            $statement->execute();
            $statement->nextRowset();
            $row = $statement->fetchObject();
            echo "$row->nb personnes entre $agemin et $agemax ans ";
         } 
         catch (Exception $e)
         {
             die ('Erreur : '.$e->getMessage());
         }