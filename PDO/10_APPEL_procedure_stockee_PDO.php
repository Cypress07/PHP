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
            
            $stmt = $cnx->prepare("CALL createcontact (?, ?, ?)");
            $nom ='DEVERS';
            $prenom = 'Gilles';
            $age = 40;
            $stmt->bindParam(1, $nom, PDO::PARAM_STR, 30);
            $stmt->bindParam(2, $prenom, PDO::PARAM_STR, 30);
            $stmt->bindParam(3, $age, PDO::PARAM_INT);
            
            $stmt->execute();
            echo "La procédure a inséré une nouvelle personne.";
            
         } 
         catch (Exception $e)
         {
             die ('Erreur : '.$e->getMessage());
         }