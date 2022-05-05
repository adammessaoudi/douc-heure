
 <?php

include_once "../../../Controller/ratingC.php";
include_once "../../../model/rating.php";
include_once "../layout/Header.php";


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
          //  $id = isset($_POST['id']) ? $_POST['id'] : NULL;
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


    <section class="content">
        <div class="container-fluid">
     
        
            <!-- #END# Basic Validation -->
            <!-- Advanced Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                modifier rating
                            </h2>
                         
                        </div>
                        <div class="body">
                            <form action="modifierRatingAction.php?id=<?=$rating['id']?>" method="POST">
                            <table class='table table-hover table-responsive table-bordered'>
                            <tr>
            <td>nom</td>
            <td><input type='text' name='nom' value ="<?php echo $rating['nom'];?>" class='form-control' /></td>
        </tr>
        <tr>
            <td>note</td>
            <td><input type='text' name='note'  value ="<?php echo $rating['note'];?>" class='form-control' /></td>
        </tr>
        
        <tr>
            <td>idreclamation</td>
            <td><input type='text' name='idreclamation'  value ="<?php echo $rating['idreclamation'];?>" class='form-control' /></td>
        </tr>
       
        
     
                                        <button class="btn btn-success waves-effect" type="submit">Valider</button>
                                        <a href='listrating.php' class='btn btn-danger'>Back</a>
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

