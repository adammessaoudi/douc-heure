<?php  
//export.php  
$connect = mysqli_connect("localhost", "root", "", "ahmed");
$output = '';
if(isset($_POST["export"]))
{
 $query = "SELECT * FROM utilisateurs";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                         <th>idUtilisateur</th>  
                         <th>nomUtilisateur</th>  
                         <th>prenomUtilisateur</th>  
                         <th>Email</th>
                         <th>username</th>
      
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
                         <td>'.$row["idUtilisateur"].'</td>  
                         <td>'.$row["nomUtilisateur"].'</td>  
                         <td>'.$row["prenomUtilisateur"].'</td>  
                         <td>'.$row["Email"].'</td>  
                         <td>'.$row["username"].'</td>  
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