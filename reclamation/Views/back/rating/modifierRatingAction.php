
 <?php

include_once "../../../Controller/ratingC.php";
include_once "../../../model/rating.php";


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
    // Check if the reclamation id exists, for example update.php?id=1 will get the reclamation with the id of 1
    if (isset($_GET['id'])) {
        if (!empty($_POST)) {
            // This part is similar to the create.php, but instead we update a record and not insert
          // $id = isset($_POST['id']) ? $_POST['id'] : NULL; 
            $nom = isset($_POST['nom']) ? $_POST['nom'] : '';
            $note = isset($_POST['note']) ? $_POST['note'] : '';
            $idreclamation = isset($_POST['idreclamation']) ? $_POST['idreclamation'] : '';
            if($nom != "" && $idreclamation != ""){ // si les saisies ne sont pas vides
   
            }else { echo "champs vide !";}
            
            // Update the record
            $stmt = $pdo->prepare('UPDATE rating SET  nom = ?, note = ?, idreclamation = ? WHERE id = ?');
            $stmt->execute([ $nom, $note, $idreclamation, $_GET['id']]);
            $msg = 'Updated Successfully!';
        }
        // Get the reclamation from the ratinf table
     $stmt = $pdo->prepare('SELECT * FROM rating WHERE id = ?');
       $stmt->execute([$_GET['id']]);
      $rating = $stmt->fetch(PDO::FETCH_ASSOC);
        if (!$rating) {
           exit('rating doesn\'t exist with that id!');
        }
    } 
    else {
        exit('No id specified!');
    }
    
    ?>