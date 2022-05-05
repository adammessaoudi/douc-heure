﻿<?php  
     include_once "../../../Controller/reclamationC.php";
     include_once "../../../Model/reclamation.php";
     include_once "../layout/Header.php";

  

  $reclamationC=new reclamationC();
  $listereclamation=$reclamationC->afficherReclamation();

 /* 
  else if(isset($_POST['supprimer'])){
   
    $produitC->supprimerproduit($_POST['reference']);
    header('location: list_produits.php');
  }*/
  

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
                              Liste des reclamations
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
                                <br>
                                <div id="DataTables_Table_1_filter" class="dataTables_filter">
                                <label>Recherche:<input id="myInput"  type="text"name="rechercher" class="form-control input-sm" placeholder="" aria-controls="DataTables_Table_1"></label></div>
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>nom</th>
                                            <th>description</th>
                                            <th>email</th>
                                            
                                            <th> action </th>
                                            
                                        </tr>
                                    </thead>
                                    
                                    <tbody id="myTable">
                                                 
                                        <?php      foreach ($listereclamation as $row) {?>
                            <tr class="tr-shadow">
                               
                               
                                <td>
                                <?php $str =  $row['nom'];
                                 echo strtoupper ($str);?>
                                </td>
                                </td>
                                <td>
                                <?php echo $row['description']; ?>
                                </td>
                                <td class="desc"><?PHP echo $row['email']; ?></td>
                               
                                <td>
                                <form
                                  method="POST" action="supprimerReclamation.php">
                                  <button type="submit"  name="supprimer"  class="btn btn-danger btn-circle-lg waves-effect waves-circle waves-float">
                                    <i class="material-icons">flight_takeoff</i>
                                </button>
                     
                        <input type="hidden" value=<?PHP echo $row['id']; ?> name="id">
                       
                        <a href="modifierReclamation.php?id=<?PHP echo $row['id']; ?>" >
                        <button type="button" class="btn btn-primary btn-circle-lg waves-effect waves-circle waves-float">          
                        <i class="material-icons">perm_scan_wifi</i>
                                </button>
                                </a>
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