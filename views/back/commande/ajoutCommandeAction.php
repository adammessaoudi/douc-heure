<?php

    include_once "../../../Controller/commmandeC.php";
    include_once "../../../Model/commmande.php";

    function pdo_connect_mysql() {
        $DATABASE_HOST = 'localhost';
        $DATABASE_USER = 'root';
        $DATABASE_PASS = '';
        $DATABASE_NAME = 'fakhri';
        try {
            return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
        } catch (PDOException $exception) {
            // If there is an error with the connection, stop the script and display the error.
            exit('Failed to connect to database!');
        }
    }
    $msg = '';   
    $pdo = pdo_connect_mysql();
    // Check if the commmande id exists, for example update.php?id=1 will get the commmande with the id of 1
   
        if (!empty($_POST)) {
            $id = isset($_POST['id']) && !empty($_POST['id']) && $_POST['id'] != 'auto' ? $_POST['id'] : NULL;
            $idClient = isset($_POST['idClient']) ? $_POST['idClient'] : '';
            $nom = isset($_POST['nom']) ? $_POST['nom'] : '';
            $prenom = isset($_POST['prenom']) ? $_POST['prenom'] : '';
            $addresse = isset($_POST['addresse']) ? $_POST['addresse'] : '';
            $telephone = isset($_POST['telephone']) ? $_POST['telephone'] : '';
            $totale = isset($_POST['totale']) ? $_POST['totale'] : '';
            if ( preg_match ( " /^.+@.+\.[a-zA-Z]{2,}$/ " , $prenom ) )  
            {
            
            }
            else{
                echo "addr mail n'est pas valide ";
            }
            if($idClient != "" && $nom != "" && $prenom != "" && $addresse !="" && $telephone != "" && $totale!=""){ // si les saisies ne sont pas vides
               
            }else { echo "champs vide !";}
            
            
            $stmt = $pdo->prepare('INSERT INTO commmande VALUES (?, ?, ?, ?, ? ,? ,?)');
            $stmt->execute([$id, $idClient, $nom, $prenom, $addresse, $telephone, $totale]);
            // Output message
            $msg = 'Created Successfully!';
        }


    
?>
 