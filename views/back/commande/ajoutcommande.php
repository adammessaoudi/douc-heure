
<?php 
include_once "../layout/Header.php";
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
                                Ajouter Commande
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    
                                    
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <form action="ajoutCommandeAction.php" method="POST">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" id="idClient" name="idClient"  required>
                                        <label class="form-label">idClient</label>
                                    </div>
                 
                                </div>
                               
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control"id="nom" name="nom" required>
                                        <label class="form-label">nom</label>
                                    </div>
                                    
                                </div>
                                
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control"id="prenom" name="prenom" required>
                                        <label class="form-label">prenom</label>
                                    </div>
                                    
                                </div>
                      
                                       
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control"id="addresse" name="addresse" required>
                                        <label class="form-label">addresse</label>
                                    </div>
                                    
                                </div>
                      
                                       
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control"id="telephone" name="telephone" required>
                                        <label class="form-label">telephone</label>
                                    </div>
                                    
                                </div>
                      
                                       
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control"id="totale" name="totale" required>
                                        <label class="form-label">totale</label>
                                    </div>
                                    
                                </div>
                      
                              
                            
                                
                                <button class="btn btn-success waves-effect" type="submit">Valider</button>
                                <button class="btn btn-danger waves-effect" type="reset">Annuler</button>
                            </form>
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

