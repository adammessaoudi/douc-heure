<?php
include_once "../../../Controller/paiementC.php";
 include_once "../../../Model/paiement.php";
 include_once "../layout/Header.php";


$paiementController = new paiementC();
$Listpaiement=$paiementController->afficher();


?>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
            </div>
            <script>
        function Export()
        {
            var conf = confirm("Export  to CSV?");
            if(conf == true)
            {
                window.open("export.php", '_blank');
            }
        }
    </script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                              Liste des paiements
                            </h2>
                           
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
                        <div class="body">
                            <div class="table-responsive">
                            <button  id="impression" name="impression" onclick="imprimer_page()" type="button" class="btn bg-green waves-effect">
                                    <i class="material-icons">print</i>
                                    <span>PRINT...</span>
                                </button>
                                <button type="button"  onclick="Export()"class="btn bg-blue waves-effect">
                                    <i class="material-icons">report_problem</i>
                                    <span>Export to csv</span>
                                </button>
                                <br>
                                <div id="DataTables_Table_1_filter" class="dataTables_filter">
                                <label>Recherche:<input id="myInput"  type="text"name="rechercher" class="form-control input-sm" placeholder="" aria-controls="DataTables_Table_1"></label></div>
                                <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                          commandeRef
                          </th>
                         
                          <th>
                          produit
                          </th>
                          <th>
                          prix
                          </th>
                          <th>
                          date
                          </th>
                         
                        
                          <th>
                          mode
                          </th>
                         
                        
                          <th>
                            action
                          </th>

                        </tr>
                      </thead>
                      <tbody id="myTable">
                      <?php      foreach ($Listpaiement as $row) {?>
                        <tr>
                         
                        <td>
                                                       <?php echo $row['commandeRef']; ?>
                                                      </td>
                                                    
                                                      <td>
                                                       <?php echo $row['produit']; ?>
                                                      </td>
                                                    
                                                                                               
                                                      <td>
                                                      <?PHP echo $row['prix']; ?>
                                                      </td>

                                                      <td>
                                                      <?PHP echo $row['date']; ?>
                                                      </td>
                                                      
                                                     
                                                      <td>
                                                      <?PHP echo $row['mode']; ?>
                                                      </td>
                                                     
                                                     
                                                      
                                                      <td>
                                                    <form
                                  method="POST" action="supprimerpaiement.php">
                       
                        <button class="btn btn-danger"type="submit" name="supprimer"><i class="fa fa-trash"></i></button>
                        <input type="hidden" value=<?PHP echo $row['id']; ?> name="id">
                        <a href="modifierpaiement.php?id=<?PHP echo $row['id']; ?>" type="button" class="btn btn-success waves-effect"> <i class="fa fa-edit" style="font-size:15px"></i>  </a>
                       
                               </form>


                           



                                                             </td>
                                                      </td>
                                                             <tr class="spacer"></tr>
                          </tr>
                    
                    
                          <?php
                                   }
                                   ?>
                     
                     
                      </tbody>
                    </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->
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

    <!-- Waves Effect Plugin Js -->
    <script src="../plugins/node-waves/waves.js"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="../plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="../plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="../plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="../plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="../plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="../plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="../plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="../plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="../plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

    <!-- Custom Js -->
    <script src="../js/admin.js"></script>
    <script src="../js/pages/tables/jquery-datatable.js"></script>

    <!-- Demo Js -->
    <script src="../js/demo.js"></script>
</body>

</html>