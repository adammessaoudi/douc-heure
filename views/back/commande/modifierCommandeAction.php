<?php

    
    include_once "../../../Controller/commandeC.php";
    include_once "../../../Model/commande.php";
    include_once "../layout/Header.php";
   
    function pdo_connect_mysql() {
        $DATABASE_HOST = 'localhost';
        $DATABASE_USER = 'root';
        $DATABASE_PASS = '';
        $DATABASE_NAME = 'ventebd';
        try {
            return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
        } catch (PDOException $exception) {
            // If there is an error with the connection, stop the script and display the error.
            exit('Failed to connect to database!');
        }
    }
    $msg = '';
    $pdo = pdo_connect_mysql();
    // Check if the paiement id exists, for example update.php?id=1 will get the paiement with the id of 1
    if (isset($_GET['idC'])) {
        if (!empty($_POST)) {
            // This part is similar to the create.php, but instead we update a record and not insert
          //  $id = isset($_POST['id']) ? $_POST['id'] : NULL;
            $nomUser = isset($_POST['nomUser']) ? $_POST['nomUser'] : '';
            $prenomUser = isset($_POST['prenomUser']) ? $_POST['prenomUser'] : '';
            $addresse = isset($_POST['addresse']) ? $_POST['addresse'] : '';
            $telephone = isset($_POST['telephone']) ? $_POST['telephone'] : '';
            $id_produit = isset($_POST['id_produit']) ? $_POST['id_produit'] : '';
            $quantite = isset($_POST['quantite']) ? $_POST['quantite'] : '';
            $modeLivraison = isset($_POST['modeLivraison']) ? $_POST['modeLivraison'] : '';
            $modePaiement = isset($_POST['modePaiement']) ? $_POST['modePaiement'] : '';
            $mail = isset($_POST['mail']) ? $_POST['mail'] : '';
            $status = isset($_POST['status']) ? $_POST['status'] : '';
            // Update the record
            $stmt = $pdo->prepare('UPDATE commande SET  nomUser = ?, prenomUser = ?, addresse = ?, id_produit = ?, quantite = ?, modeLivraison = ?, modePaiement = ?, mail = ?, status = ? WHERE idC = ?');
            $stmt->execute([ $nomUser, $prenomUser, $addresse, $id_produit,$quantite,$modeLivraison,$modePaiement,$mail,$status, $_GET['idC']]);
            $msg = 'Updated Successfully!';
        }
        // Get the commande from the commandes table
     $stmt = $pdo->prepare('SELECT * FROM commande WHERE idC = ?');
       $stmt->execute([$_GET['idC']]);
      $commande = $stmt->fetch(PDO::FETCH_ASSOC);
        if (!$commande) {
           exit('commande doesn\'t exist with that idC!');
        }
    } 
    else {
        exit('No id specified!');
    }
    

?>