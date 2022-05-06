<?php
     include_once 'C:\xampp\htdocs\projet_util (1)\projet_util\controller\utilisateursC.php';
     include_once 'C:\xampp\htdocs\projet_util (1)\projet_util\model\utilisateur.php';
    $error = "";

    $k=0;
    $utilisateur=null;
    $utilisateurc= new utilisateurc;
    $listeutilisateurs=$utilisateurc->recupererutilisateur();
    if (
		isset($_POST["nom"]) &&		
        isset($_POST["prenom"]) &&
        isset($_POST["email"]) && 
        isset($_POST["password"]) && 
        isset($_POST["username"])  
    ) {
        if (
			!empty($_POST['nom']) &&
            !empty($_POST["prenom"]) && 
            !empty($_POST["email"]) &&
            !empty($_POST["password"])  && 
            !empty($_POST["username"])   
        ) {
            
    foreach ($listeutilisateurs as $utilisateur)
     {
          if($utilisateur['username']==$_POST['username']) {
            $error = 'username takendd!!';
               $k=1;
          }
            }
        if($k==0) {

            $utilisateur = new utilisateur(
				$_POST['nom'],
                $_POST['prenom'], 
                password_hash($_POST['password'],PASSWORD_DEFAULT),
                $_POST['email'],
                $_POST['username']
            );
            $utilisateurc->ajouterutilisateur($utilisateur);
            header('Location:login.php');

        }
        
        }
        else
            $error = "Missing information";
    }




?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="css/style1.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	
    
  
    <title>douc'heure</title> 
    <link rel="shortcut icon" href="assests/img/favicon.png" type="image/x-icon">
    <!-- icon -->
  
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- estilo css -->
    <link rel="stylesheet" href="assests/css/style.css"> 
 
</head>

<body style="background-color: #FDF1F3;">
 <header class="l-header" id="header"> 
        <div class="navbar container flex">
            <div class="brand">
               
                <a  href="#"><img src="logoo.png" alt=""></a>
            </div>
            <div class="nav" id="nav">
                <ul class="nav__menu">
                    <li class="nav__item"><a href="" class="nav__link">home</a></li>
                    <li class="nav__item"><a href="#magasin" class="nav__link ">magasin</a></li>
                    <li class="nav__item"><a href="#services" class="nav__link">service</a></li>
                    <li class="nav__item"><a href="#package" class="nav__link">paquets</a></li>
                    <li class="nav__item"><a href="#gallery" class="nav__link">galerie</a></li>
                    <li class="nav__item"><a href="#forum" class="nav__link">forum</a></li>
                    <li class="nav__item"><a href="#blog" class="nav__link">blog</a></li>
                  <a href="login.html"> <button class="bt"  type="submit">sign up</button></a>  
                  <!--<button class="btnn">sign in</button>-->
                </ul>
            </div> 

            <div class="nav__toggle" id="nav-toggle">
                <i class='bx bx-menu'></i>
            </div>
        </div>
    <a class="menu-close" onClick="return true">
		<div class="menu-icon">
			<div class="bar"></div>
			<div class="bar"></div>
		</div>
	</a>

	<div class="wrapper">
		<div class="d-md-flex align-items-md-center">
		
		</div>
	
	

           
                <div class='singup'>
    <form class='form' method="POST" id='form'>
        <div class='moez'>
          <br><br><br>  <h2>S'inscire !</h2>    
            
        <div class="kw">
            <br>
            <input type="text" style="color:black;" name="prenom" placeholder="Ecrire votre prenom" id="prenom" class="pre"> <p id="errorPrenom" class="prenom"></p>
         
            <input type="text" name="nom" placeholder="Ecrire votre nom" id="nom" class="nom"> <p id="errorNom" class="no"></p>
        </div>
        <input type="text" name="username" placeholder="Ecrire votre username" id="username" > <p id="username" class="userr"><?php echo  $error; ?></p>
        
        <input type="email" name="email" placeholder="Ecrire votre email" id="email">   <p id="errorEmail" class="em"></p>
        
            <input type="password" name="password" placeholder="Ecrire votre mot de pass" id="password"> <p id="errorMdp" class="mdp"></p>
         
          <input type="password" name="password" placeholder="Confirmer votre mot de pass" id="password2">   <p id="errorMdp2"></p>
        
         <!--  <select name='type' id="sel" >-->
              <!--<option value="et"><label>Client</label></option>-->
              <!--<option value="en"><label>Autre</label></option>-->
              <!-- </select> <br></br>-->
            <input type="submit"  button class="bt" value="Confirmer" id="yes">
           <center| <p>En appuiant sur Confirmer vous accepter nos <a href="term.html">termes et conditions </a><br> et notre <a href="politique.html">politique de confidentialité</a></p></center>
            </div>
       
        </form>
</div>
<center><p class='par2'>Vous avez deja un compte? <a href="login.php">Se connecter ici</a></p></center>
<script src="js/ins.js"></script>
              
             
           
   

    
   
 


</body>
</html>