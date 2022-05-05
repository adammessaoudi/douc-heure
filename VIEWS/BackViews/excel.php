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