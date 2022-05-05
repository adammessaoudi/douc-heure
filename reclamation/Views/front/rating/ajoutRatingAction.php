<?php

    include_once "../../../Controller/ratingC.php";
    
    include_once "../../../Model/rating.php";

    function pdo_connect_mysql() {
        $DATABASE_HOST = 'localhost';
        $DATABASE_USER = 'root';
        $DATABASE_PASS = '';
        $DATABASE_NAME = 'reclamation';
        try {
            return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
        } catch (PDOException $exception) {
            // If there is an error with the connection, stop the script and display the error.
            exit('Failed to connect to database!');
        }
    }
    $msg = '';   
    $pdo = pdo_connect_mysql();
    // Check if the rating id exists, for example update.php?id=1 will get the rating with the id of 1
   
        if (!empty($_POST)) {
            $id = isset($_POST['id']) && !empty($_POST['id']) && $_POST['id'] != 'auto' ? $_POST['id'] : NULL;
            $nom = isset($_POST['nom']) ? $_POST['nom'] : '';
            $note = isset($_POST['note']) ? $_POST['note'] : '';
            $idreclamation = isset($_POST['idreclamation']) ? $_POST['idreclamation'] : '';
            if($nom != "" && $note !="" && $idreclamation != ""){ // si les saisies ne sont pas vides
   
            }else { echo "champs vide !";}
            
            $stmt = $pdo->prepare('INSERT INTO rating VALUES (?, ?, ?, ?)');
            $stmt->execute([$id, $nom, $note, $idreclamation]);
            // Output message
            $msg = 'Created Successfully!';
        }


    
?>
 