<?php
	
    include 'C:\xampp\htdocs\projet_util (1)\projet_util\controller\utilisateursC.php';
    $_SESSION['auth']=false;
    $verif=0;
    $utilisateur= new utilisateurc();
   
    $listeutilisateurs=$utilisateur->recupererutilisateur();
    foreach ($listeutilisateurs as $utilisateur)
    {
        if((isset($_POST['email']))&&(isset($_POST['password'])))
        {
          $verifm = password_verify($_POST['password'], $utilisateur['mdpUtilisateur']);
        
    if ((($_POST['email']==$utilisateur['Email'])&&($verifm==true)&&($utilisateur['etat']==1))||(($_POST['email']==$utilisateur['username'])&&($verif==true)&&($utilisateur['etat']==1))) 
    {
    $verif=1;
    $_SESSION['auth']=true;
    $_SESSION['user_name']=$utilisateur['nomUtilisateur'];
    $_SESSION['user_id']=$utilisateur['idUtilisateur'];
    $_SESSION['etat']=$utilisateur['admin'];
    header('Location:log.php');
    }
    else
    $verif=2;
}
}
?>


<!-- 
     <div class="sign-in-htm">
                    <div class="group">
                        <label for="user" class="label">Username</label>
                        <input id="user" type="text" class="input">
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Password</label>
                        <input id="pass" type="password" class="input" data-type="password">
                    </div>
                    <div class="group">
                        <input id="check" type="checkbox" class="check" checked>
                        <label for="check"><span class="icon"></span> Keep me Signed in</label>
                    </div>
                    <div class="group">
                        <input type="submit" class="button"  value="Sign In">
                    </div>
                    <div class="hr"></div>
                    <div class="foot-lnk">
                        <a href="#forgot">Forgot Password?</a>
                    </div>
                </div>
                <div class="sign-up-htm">
                    <div class="group">
                        <label for="user" class="label">Username</label>
                        <input id="username" type="text" class="input">
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Password</label>
                        <input id="password" type="password" class="input" data-type="password">
                    </div>
                    <div class="group">
                        <label for="pass2" class="label">Repeat Password</label>
                        <input id="password2" type="password" class="input" data-type="password">
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Email Address</label>
                        <input id="mail" type="text" class="input">
                    </div>
                    <div class="group">
                        <input type="submit" class="button" value="Sign Up" >
                    </div>
                    <div class="hr"></div>
                    <div class="foot-lnk">
                        <label for="tab-1">Already Member?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/main.js"></script>
  -->


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
	
	
	


<form id="f" method="POST">  
    <div class="sign-in-htm">
        <div class="login-html">
            <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
            <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
            <div class="login-form">
            <div class="log">

    <form  action="" class='form' method="POST">
        <br>  <h2 style="color:Red;">LOGIN</h2>    <br><br>
          <p style="color:black;">Email / Nom d'utilisateur</p>
       <br> <input type="text" name='email' class='box' placeholder="Saiser votre email" >
       <br><br> <p style="color:black;">Mot De Passe</p>
       <br> <input type='password' name='password' class="box" placeholder="Saiser votre mot de passe" >
       <br><br> <input type="submit" value="LOGIN"  button class="bt1" id='submit' action="veriflog.php"> <p class='mochkla'><?php if($verif==2) echo'Information erroné !'; ?></p>
        <a href="#" class="k">Mot de pass oublié?</a><br>
    </form>
         <p class="kek">Vous n'avez pas de compte? <a href="inscription.php">Inscrivez vous ici</a></p>
    </div>
  

<script src="js/main.js"></script>
    </body>

</html>