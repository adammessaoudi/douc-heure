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




    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    FORM VALIDATION
                    <small>Taken from <a href="https://jqueryvalidation.org/" target="_blank">jqueryvalidation.org</a></small>
                </h2>
            </div>
           
            <!-- #END# Basic Validation -->
            <!-- Advanced Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                modifier commande
                            </h2>
                         
                        </div>
                        <div class="body">
                        <form action="modifierCommande.php?idC=<?=$commande['idC']?>" method="POST">
                         			
                                     <div class="form-group">	
                                             <table class='table table-hover table-responsive table-bordered'>
                 
                                             <tr>
                             <td>nomUser</td>
                             <td><input type='text' name='nomUser' value ="<?php echo $commande['nomUser'];?>" class='form-control' /></td>
                         </tr>
                         <tr>
                             <td>prenomUser</td>
                             <td><input type='text' name='prenomUser'  value ="<?php echo $commande['prenomUser'];?>" class='form-control' /></td>
                         </tr>
                         
                         <tr>
                             <td>addresse</td>
                             <td><input type='text' name='addresse'  value ="<?php echo $commande['addresse'];?>" class='form-control' /></td>
                         </tr>
                         
                         <tr>
                             <td>id_produit</td>
                             <td><input type='text' name='id_produit'value ="<?php echo $commande['id_produit'];?>" class='form-control' /></td>
                         </tr>
                         <tr>
                             <td>quantite</td>
                             <td><input type='text' name='quantite'value ="<?php echo $commande['quantite'];?>" class='form-control' /></td>
                         </tr>
                         <tr>
                             <td>modeLivraison</td>
                             <td><input type='text' name='modeLivraison'value ="<?php echo $commande['modeLivraison'];?>" class='form-control' /></td>
                         </tr>
                         <tr>
                             <td>modePaiement</td>
                             <td><input type='text' name='modePaiement'value ="<?php echo $commande['modePaiement'];?>" class='form-control' /></td>
                         </tr>
                         <tr>
                             <td>mail</td>
                             <td><input type='text' name='mail'value ="<?php echo $commande['mail'];?>" class='form-control' /></td>
                         </tr>
                         <tr>
                             <td>status</td>
                             <td><input type='text' name='status'value ="<?php echo $commande['status'];?>" class='form-control' /></td>
                         </tr>
                      
                      
                                                         <button class="btn btn-success waves-effect" type="submit">Valider</button>
                                                         <a href='consulterCommande.php' class='btn btn-danger'>Back</a>
                                                 </table>
                                             </form>
                                             <?php if ($msg): ?>
                     <p><?=$msg?></p>
                     <?php endif; ?>
                 
                       <?php
                   
                   ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Advanced Validation -->
           
        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="../plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="../plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Jquery Validation Plugin Css -->
    <script src="../plugins/jquery-validation/jquery.validate.js"></script>

    <!-- JQuery Steps Plugin Js -->
    <script src="../plugins/jquery-steps/jquery.steps.js"></script>

    <!-- Sweet Alert Plugin Js -->
    <script src="../plugins/sweetalert/sweetalert.min.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../plugins/node-waves/waves.js"></script>

    <!-- Custom Js -->
    <script src="../js/admin.js"></script>
    <script src="../js/pages/forms/form-validation.js"></script>

    <!-- Demo Js -->
    <script src="../js/demo.js"></script>
</body>

</html>

