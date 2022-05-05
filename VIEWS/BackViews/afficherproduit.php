<?php
include '../../controller/produitC.php';
include_once 'navbar.php';
$ProduitC = new produitC();
$listep = $ProduitC->afficherproduit();
$con = mysqli_connect("localhost","root","","integrationfinale");
 

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products Page</title>
    <!--

    Template 2108 Dashboard

	http://www.tooplate.com/view/2108-dashboard

    -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600">
    <!-- https://fonts.google.com/specimen/Open+Sans -->
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/tooplate.css">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['libelle', 'nb_calories'],
         <?php
         $sql = "SELECT * FROM produit";
         $fire = mysqli_query($con,$sql);
          while ($result = mysqli_fetch_assoc($fire)) {
            echo"['".$result['libelle']."',".$result['nb_calories']."],";
          }

         ?>
        ]);

        
    </script>
    
</head>


                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- row -->
            <div class="row tm-content-row tm-mt-big">
                <div class="col-xl-8 col-lg-12 tm-md-12 tm-sm-12 tm-col">
                    <div class="bg-white tm-block h-100">
                        <div class="row">
                            <div class="col-md-8 col-sm-12">
                                <h2 class="tm-block-title d-inline-block">Produits</h2>

                            </div>
                            <div class="col-md-4 col-sm-12 text-right">
                                <a href="addproduit.php" class="btn btn-small btn-primary">Ajouter nouveau produit</a>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover table-striped tm-table-striped-even mt-3" id="dataTable">
                                <thead>
                                    <tr class="tm-bg-gray">
                                        <th scope="col">ID produit</th>
                                        <th scope="col">Image produit</th>
                                        <th scope="col">Nom produit</th>
                                        <th scope="col">Description</th>
                                        <th scope="col" class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>


                                        <?php
                                        foreach ($listep as $produit) {
                                        ?>
                                    <tr>
                                        <td><?php echo $produit['id']; ?></td>
                                        <td><img src="../FrontViews/img/cour/<?php echo $produit['img']; ?>" alt="" style="width: 100px; height: 100px"></td>
                                        <td><?php echo $produit['libelle']; ?></td>
                                        <td><?php echo $produit['description']; ?></td>
                                        <td>
                                            <a href="updateProduit.php?id=<?php echo $produit['id']; ?>" class="btn">Modifier</a>
                                            <a href="deleteProduit.php?id=<?php echo $produit['id']; ?>" class="btn">Supprimer</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                                </tr>





                                </tbody>
                            </table>
                        </div>

                        <div class="tm-table-mt tm-table-actions-row">
                            <div class="tm-table-actions-col-left">
                                
                            </div>
                            <div class="tm-table-actions-col-right">
                                <span class="tm-pagination-label">Page</span>
                                <nav aria-label="Page navigation" class="d-inline-block">
                                    <ul class="pagination tm-pagination">
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <span class="tm-dots d-block">...</span>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">13</a></li>
                                        <li class="page-item"><a class="page-link" href="#">14</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-12 tm-md-12 tm-sm-12 tm-col"   >
                    <div class="bg-white tm-block h-100"  >
                        
                        <table class="table table-hover table-striped mt-3">
                        <div id="piechart" style="width: 300px; "></div>    
                        </table>
                        
                        <div class="tm-table-actions-col-left">
                                
                       
                        </div>
                    </div>
                </div>
            </div>
            <footer class="row tm-mt-small">
                <div class="col-12 font-weight-light">
                    <p class="d-inline-block tm-bg-black text-white py-2 px-4">
                        Copyright &copy; 2018 Admin Dashboard . Created by
                        <a rel="nofollow" href="https://www.tooplate.com" class="text-white tm-footer-link">Tooplate</a>
                    </p>
                </div>
            </footer>
        </div>
    </div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script>
        $(function() {
            $('.tm-product-name').on('click', function() {
                window.location.href = "edit-product.html";
            });
        })
    </script>
    
</body>

</html>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Recherche produit" title="Type in a name">

<script>
    function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("dataTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
<?php  
//export.php  
$connect = mysqli_connect("localhost", "root", "", "integrationfinale");
$output = '';
if(isset($_POST["export"]))
{
 $query = "SELECT * FROM produit";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                         <th>id</th>  
                         <th>nom produit</th>  
                         <th>nbr produit</th>  
                         <th>prix</th>
                         <th>categorie</th>
      
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
                         <td>'.$row["id"].'</td>  
                         <td>'.$row["libelle"].'</td>  
                         <td>'.$row["nb_calories"].'</td>  
                         <td>'.$row["prix"].'</td>  
                         <td>'.$row["categorie"].'</td>  
                    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=download.xls');
  echo $output;
 }
}
?>   
<table class="table table-bordered">
     <tr>  
	
     <?php
	  $query = "SELECT * FROM produit";
	  $result = mysqli_query($connect, $query);
     while($row = mysqli_fetch_array($result))  
     {  
   
     }
     ?>
    </table>
    <br />
    <form method="post" action="excel.php">
     <input type="submit" name="export" class="btn btn-success" value="Export Excel" />
    </form>