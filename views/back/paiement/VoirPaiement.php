<?php
    
include_once "../../../Controller/PaiementC.php";
include_once "../../../Model/paiement.php";

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
if (isset($_GET['id'])) {
    if (!empty($_POST)) {
        // This part is similar to the create.php, but instead we update a record and not insert
      //  $id = isset($_POST['id']) ? $_POST['id'] : NULL;
        $commandeRef = isset($_POST['commandeRef']) ? $_POST['commandeRef'] : '';
        $produit = isset($_POST['produit']) ? $_POST['produit'] : '';
        $prix = isset($_POST['prix']) ? $_POST['prix'] : '';
        $date = isset($_POST['date']) ? $_POST['date'] : '';
        $mode = isset($_POST['mode']) ? $_POST['mode'] : '';
        // Update the record
        $stmt = $pdo->prepare('UPDATE paiement SET  commandeRef = ?, produit = ?, prix = ?, date = ?, mode = ? WHERE id = ?');
        $stmt->execute([ $commandeRef, $produit, $prix, $date, $mode, $_GET['id']]);
        $msg = 'Updated Successfully!';
    }
    // Get the paiement from the paiements table
 $stmt = $pdo->prepare('SELECT * FROM paiement WHERE id = ?');
   $stmt->execute([$_GET['id']]);
  $paiement = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$paiement) {
       exit('paiement doesn\'t exist with that id!');
    }
} 
else {
    exit('No id specified!');
}


?>


    <section class="content">
        <div class="container-fluid">
     
        
            <!-- #END# Basic Validation -->
            <!-- Advanced Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                modifier paiement
                            </h2>
                         
                        </div>
                        <div class="body">
                        <form action="modifierPaiementAction.php?id=<?=$paiement['id']?>" method="POST">
                            <table class='table table-hover table-responsive table-bordered'>
                            <tr>
            <td>commandeRef</td>
            <td><?php echo $paiement['commandeRef'];?></td>
        </tr>
        <tr>
            <td>produit</td>
            <td><?php echo $paiement['produit'];?></td>
        </tr>
        
        <tr>
            <td>prix</td>
            <td><?php echo $paiement['prix'];?></td>
        </tr>
        <tr>
            <td>date</td>
            <td><?php echo $paiement['date'];?></td>
        </tr>
        <tr>
            <td>mode</td>
            <td><?php echo $paiement['mode'];?></td>
        </tr>
        
        <div class="imprimer">
      	<input id="impression"class="btn btn-success waves-effect" name="impression" type="submit" onclick="imprimer_page()" value="Exporter en pdf " />
      </div>
 
       <script type="text/javascript">
            function imprimer_page(){
            window.print();
             }
        </script>
         <PHP header('Expires: 0');
          header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
          header('Pragma: public');
          ?>
                                   
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

