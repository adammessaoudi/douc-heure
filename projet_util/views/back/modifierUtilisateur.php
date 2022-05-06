<?php
include_once 'C:\xampp\htdocs\projet_util (1)\projet_util\model\utilisateur.php';
include_once 'C:\xampp\htdocs\projet_util (1)\projet_util\controller\utilisateursC.php';

        $error = "";
    // create
 $utilisateur = null;
    // create an instance of the controller
    $utilisateurc = new utilisateurc();
    if (
        isset($_POST["nomUtilisateur"]) &&
		isset($_POST["prenomUtilisateur"]) &&	
        isset($_POST["mdpUtilisateur"])  &&	
        isset($_POST["Email"])  &&        
        isset($_POST["username"])
     
		 )
        {
        if (
            !empty($_POST["nomUtilisateur"]) && 
			!empty($_POST["prenomUtilisateur"]) &&
            !empty($_POST["mdpUtilisateur"])   &&
            !empty($_POST["Email"])   &&
            !empty($_POST["username"])   
        ) {
            $utilisateur = new utilisateur(
                $_POST['nomUtilisateur'],
                $_POST['prenomUtilisateur'],
                $_POST['mdpUtilisateur'],
                $_POST['Email'],
                $_POST['username']
            );
            $utilisateurc->modifierutilisateur($utilisateur,$_POST["idUtilisateur"]);
            header('Location:AfficherListeU.php');
        }
        else
            $error = "Missing information";
    }
    ?>
    
    <!DOCTYPE html>
<html lang="pt-br"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier utilisateur</title>
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
                    <li class="nav__item"><a href="#magasinn" class="nav-champ">magasin</a></li>
                    <li class="nav__item"><a href="#services" class="nav-champ">service</a></li>
                    <li class="nav__item"><a href="#package" class="nav-champ">paquets</a></li>
                    <li class="nav__item"><a href="index.html" class="nav-champ">galerie</a></li>
                    <li class="nav__item"><a href="#forum" class="nav-champ">forum</a></li>
                    <li class="nav__item"><a href="#blog" class="nav-champ"></a></li>
                  <a href=""> <button class="bt"  type="submit">sign up</button></a>  
                  <!--<button class="btnn">sign in</button>-->
                </ul>
            </div> 
</div>      		

                <form action="" method='POST'>
                <div id="error">
            <?php echo $error; ?>        			
                <?php
                if (isset($_POST["idUtilisateur"])){
				$utilisateur = $utilisateurc->recupererutilisateurinfo($_POST["idUtilisateur"]);
                ?>
                </div>

                   
                <input type="hidden" id="idUtilisateur" name="idUtilisateur" value="<?php echo $utilisateur["idUtilisateur"];?> " 
                    minlength="3" maxlength="20" size="10" >
                    <br><br>
                    <label for="nomUtilisateur">nom Utilisateur:
                    </label>
                    <input type="text" id="nomUtilisateur" name="nomUtilisateur" value="<?php echo $utilisateur["nomUtilisateur"];?>"
                    minlength="3" maxlength="20" size="10" >
                    <br><br>
                    <label for="prenomUtilisateur">prenom Utilisateur:
                    </label>
                    <input type="text" id="prenomUtilisateur" name="prenomUtilisateur" value="<?php echo $utilisateur["prenomUtilisateur"];?>"
                    minlength="3" maxlength="20" size="10" >
                    <br><br>

                    <label for="mdpUtilisateur">mot de passe Utilisateur:
                    </label>
                    <input type="text" id="mdpUtilisateur" name="mdpUtilisateur" value="<?php echo $utilisateur["mdpUtilisateur"];?>"
                    minlength="3" maxlength="20" size="10" >
                    <br><br>
                    <label for="Email">email:
                    </label>
                    <input type="text" id="Email" name="Email" value="<?php echo $utilisateur["Email"];?>"
                    minlength="3" maxlength="20" size="10" >
                    <br><br>
                    <label for="username">username:
                    </label>
                    <input type="text" id="username" name="username" value="<?php echo $utilisateur["username"];?>"
                    minlength="3" maxlength="20" size="10" >
                    <br><br>
           

<br><br>

              
             
            <br><br>
                <button type="submit">modifier </button>
                </form>
            </div>
        </div>
        <?php
		}
		?>

    <!-- Template Javascript -->
    <script src="../js/main.js"></script>
</body>

</html>