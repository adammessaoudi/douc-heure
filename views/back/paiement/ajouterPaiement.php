<?php 
include_once "../layout/Header.php";
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
                                Ajouter panier
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">              
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                        <form action="ajoutPaiementAction.php" method="POST">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                    <label class="form-label">commandeRef</label>
                                        <input type="text" class="form-control" id="commandeRef" name="commandeRef" maxlength="10" minlength="3" required>
                                        
                                    </div>
                                   
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                    <label class="form-label">produit</label>
                                        <input type="text" class="form-control"id="produit" name="produit" min="10" max="200" required>
                                       
                                    </div>
                                    
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                    <label class="form-label">prix</label>
                                        <input type="number" class="form-control" id="prix" name="prix" required>
                                      
                                    </div>
                                  
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                    <label class="form-label">Date</label>
                                    <input type="datetime-local" name="date" id="date"  value="<?=date('Y-m-d\TH:i')?>"  class="form-control" placeholder="Left Font Awesome Icon"  required>
                                       
                                    </div>
                                  
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                    <label class="form-label">mode</label>
                                        <input type="text" class="form-control" id="mode" name="mode" required>
                                       
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

