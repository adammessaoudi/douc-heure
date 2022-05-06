<?php
include 'C:\xampp\htdocs\projet_util (1)\projet_util\controller\utilisateursC.php';

$utilisateurc=new utilisateurc();
$listeUtilisateur=$utilisateurc->recupererutilisateur();
if (isset($_POST['tri']))
{
    if($_POST['tri']=="idASC")
    {$listeUtilisateur=$utilisateurc->triPrix();}
    if($_POST['tri']=="idDESC")
    {$listeUtilisateur=$utilisateurc->triPrixDesc();}
    
}
?>
  
  <!DOCTYPE html>
<html lang="pt-br"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>douc'heure</title> 
    <link rel="stylesheet" href="../css/login.css"> 
</head> 

<body>
    <header class="header" id="header"> 
        <div class="menuf">
            <div class="brand">
                <img scr="logo2.png">
                <a  href="#"><img src="logoo.png" alt=""></a>
            </div>
            <div class="nav-menu" id="nav-menu">
                <ul class="nav-list">
                    <li class="nav__item"><a href="index.html" class="nav-champ">home</a></li>
                  <a href=""> <button class="bt"  type="submit">sign up</button></a>  
                  <!--<button class="btnn">sign in</button>-->
                </ul>
            </div> 
</div>
       <!-- <button>-->
           <!-- <a href="index.php">Ajouter une utilisateur</a>-->
        </button>
        <center><h1>Liste des utilisateur</h1></center>
       <center> <table border="1" bordercolor="white"align="center" style="color:black;" id="dataTable"></center>
            <tr >
                <th>id Utilisateur</th>
                <th>nom Utilisateur</th>
                <th>prenom Utilisateur</th>
                <th>Email</th>
                <th>username</th>
                <th>Modifier</th>
                <th>Supprimer</th>

            </tr>
            <?php
            foreach($listeUtilisateur as $utilisateur){
            ?>
            <tr>
                <td><?php echo $utilisateur['idUtilisateur']; ?></td>
                <td><?php echo $utilisateur['nomUtilisateur']; ?></td>
                <td><?php echo $utilisateur['prenomUtilisateur']; ?></td>
                <!-- <td><?php echo $utilisateur['mdpUtilisateur']; ?></td> -->
                <td><?php echo $utilisateur['Email']; ?></td>
                <td><?php echo $utilisateur['username']; ?></td>
            
                <td>
                    <form method="POST" action="modifierutilisateur.php">
                        <input type="submit" button class="bt1" name="Modifier" value="Modifier">
                        <input type="hidden" value=<?php echo $utilisateur['idUtilisateur']; ?> name="idUtilisateur">
                    </form>
                </td>
                <td>
                    <a href="supprimerUtilisateur.php?idUtilisateur=<?php echo $utilisateur['idUtilisateur']; ?>">Supprimer</a>
                </td>
            </tr>
            <?php
            }
            ?>
        </table>
          <!-- Navbar & Hero End -->


    <!-- Template Javascript -->
    <script src="../js/main.js"></script>
    <form action="" method="POST">
    <select name="tri" id="tri">
    <option prixASC></option>
        <option value="idASC">idASC</option>
        <option value="idDESC">idDESC</option>
        
        <input type="submit" value="Trier">
    </select>
    <!--<input type="submit" value="">-->
</form>
    </body>
    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Recherche id utilsateur" title="Type in a name">

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
<table class="table table-bordered">
     <tr>  
	
     <?php
	  $query = "SELECT * FROM utilisateurs";
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