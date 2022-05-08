<?php

include_once '../../models/Reservation.php';
include_once '../../controllers/reservationController.php';
$reservationC = new reservationController();
$listeR = $reservationC->afficherReservations();


if (
    isset($_POST["firstname"]) && 
    isset($_POST["lastname"]) && 
    isset($_POST["email"])&& 
    isset($_POST["telephone"])&& 
    isset($_POST["datedereservation"])&& 
    isset($_POST["cat"])
) {

        $reservation = new Reservation(
            $_POST["firstname"],
            $_POST["lastname"],
            $_POST["email"],
            $_POST["telephone"],
            date("Y-m-d H:i:s", strtotime($_POST["datedereservation"])),
            $_POST["cat"]
        );
        $reservationC->ajouterReservation($reservation);
        
        
        
        echo "<script>alert('Reservation effectée avec succes');</script>";
    
    }

if (isset($_POST["tri"]))
{
    $listeC = $offreC->afficherOffreTrie($_POST["tri"]);
}
if (isset($_POST["rech"]))
{
    $listeC = $offreC->afficherOffreRech($_POST["rech"],$_POST["selon"]);
}
?>




<!DOCTYPE html>
<html lang="pt-br"> 
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>douc'heure</title> 
    <link rel="shortcut icon" href="assests/img/favicon.png" type="image/x-icon">
    <!-- icon -->
  
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- estilo css -->
    <link rel="stylesheet" href="reser.css"> 
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"></script>


</head> 
<body>

   
    <header class="header" id="header"> 
        <div class="menuf">
            <div class="brand">
                <img scr="logo2.png">
                <a  href="#"><img src="dc.png" alt=""></a>
            </div>
            <div class="nav-menu" id="nav-menu">
                <ul class="nav-list">
                    <li class="nav__item"><a href="index.html" class="nav-champ">home</a></li>
                    <li class="nav__item"><a href="#magasinn" class="nav-champ">magasin</a></li>
                    <li class="nav__item"><a href="#services" class="nav-champ">service</a></li>
                    <li class="nav__item"><a href="#package" class="nav-champ">paquets</a></li>
                    <li class="nav__item"><a href="index.html" class="nav-champ">galerie</a></li>
                    <li class="nav__item"><a href="#forum" class="nav-champ">forum</a></li>
                    <li class="nav__item"><a href="#panier" class="nav-champ">panier</a></li>
                   

                  <a href=""> <button class="bt"  type="submit">sign up</button></a>  
                  <!--<button class="btnn">sign in</button>-->
                </ul>
            </div> 
</div>
<form name="" method="post" action="">
    <div id='login-form'class='login-page'>
    <div class="form-box">
      
    <div class="reserv">RESERVATIONS</div>
    <div id='register' class='input-group-register'>
      <input type='text'class='input-field'placeholder='First Name' id="firstname" name="firstname" >
      <input type='text'class='input-field'placeholder='Last Name ' id="lastname" name="lastname">
      <input type='email'class='input-field'placeholder='Email' id="email" name="email" >
      <input type='tel'class='input-field'placeholder='votre numero de telephone' id="telephone" name="telephone">
      <div class="textdate">date de reservation</div><input class="date" id="datedereservation"type="datetime-local" name="datedereservation" value="">

      
      <br>
      <div class="select">Veuillez confirmer votre forfait </div>
      <p><select class="choisirservice" size="1" id="cat" name="cat" onchange="random_function()">
      <option  >choisir</option>
      <option  value="1">SILVER</option>
        <option value="2">BRONZE</option>
        <option value="3">GOLD</option>
        
        </select></p> 
  
        <br> 
         <!--<select class="choisir" name="cat2" id="cat2">
          <option></option>
        </select>
      <p><textarea  class="area"rows="5" name="area" cols="40" id="textarea" placeholder="commenter ici"></textarea></p> 
    -->
      <button type='submit' value="submit" onclick="alert();" formaction="index.php"class='submit-btn' >reserver</button>
      <a href="#" type="reset" id="loginbtn" class="bttt" onclick="document.getElementById('login-form').style.display='none'">quitter</a>

  </form>   
  </header>

  <section class="package section" id="package">
    <div class="package_-content">
        <div class="row">
            <div class="section__title">
                <h1>forfaits promotionnels</h1>
                <span>Pour votre mariage</span>
            </div>
        </div>
        <div class="package__cards row container">
            <div class="card">
                <div class="card__title">
                    <h1>BRONZE</h1>
                </div>
                <div class="card__items">
                    <div class="item">
                        <i class='bx bx-message-square-check check__icon' ></i>
                        <p>coiffure</p>
                    </div>
                    <div class="item">
                        <i class='bx bx-message-square-check check__icon' ></i>
                        <p>maquillage</p>
                    </div>
                    <div class="item">
                        <i class='bx bx-message-square-check check__icon' ></i>
                        <p>conception de sourcils<span></span></p>
                    </div>
                    <div class="item">
                        <i  class='bx bx-message-square-check check__icon' ></i>
                        <p >Epilation</p>
                    </div>
                    <div class="item">
                        <i class='bx bx-message-square-x x__icon' ></i>
                        <p class="not">Nettoyage de la peau</p>
                    </div>
                    <div class="item">
                        <i class='bx bx-message-square-x x__icon' ></i>
                        <p class="not">chambre nuptiale réservée</p>
                    </div>
                   
                   <!-- <div class="item">
                        <i class='bx bx-message-square-x x__icon' ></i>
                        <p class="not">Mesa de frutas</p>
                    </div>-->
                    <div></div>
                    <a href="#" type="button" id="loginbtn" class="btn" onclick="document.getElementById('login-form').style.display='block'">Reserver</a>
                </div>
            </div>

            <div class="card">
                <div class="card__title">
                    <h1>SILVER</h1>
                </div>
                <div class="card__items">
                    <div class="item">
                        <i class='bx bx-message-square-check check__icon' ></i>
                        <p>coiffure</p>
                    </div>
                    <div class="item">
                        <i class='bx bx-message-square-check check__icon' ></i>
                        <p>maquillage</p>
                    </div>
                    <div class="item">
                        <i class='bx bx-message-square-check check__icon' ></i>
                        <p>conception des sourcils</p>
                    </div>
                    <div class="item">
                        <i class='bx bx-message-square-check check__icon'></i>
                        <p >Epilation</p>
                    </div>
                    <div class="item">
                        <i class='bx bx-message-square-check check__icon' ></i>
                        <p>nettoyage de la peau</p>
                    </div>
                    <div class="item">
                        <i class='bx bx-message-square-x x__icon'></i>
                        <p class="not">chambre nuptiale reservé</p>
                    </div>
   
                  <a href="#" type="button" id="loginbtn" class="btn" onclick="document.getElementById('login-form').style.display='block'">Reserver</a>
                </div>
            </div>

            <div class="card">
                <div class="card__title">
                    <h1>GOLD</h1>
                </div>
                <div class="card__items">
                    <div class="item">
                        <i class='bx bx-message-square-check check__icon' ></i>
                        <p>coiffure</p>
                    </div>
                    <div class="item">
                        <i class='bx bx-message-square-check check__icon' ></i>
                        <p>maquillage</p>
                    </div>
                    <div class="item">
                        <i class='bx bx-message-square-check check__icon' ></i>
                        <p>conception des sourcils <span></span></p>
                    </div>
                    <div class="item">
                        <i class='bx bx-message-square-check check__icon' ></i>
                        <p >Epilation</p>
                    </div>
                    <div class="item">
                        <i class='bx bx-message-square-check check__icon' ></i>
                        <p>nettoyage de la peu</p>
                    </div>
                    <div class="item">
                        <i class='bx bx-message-square-check check__icon' ></i>
                        <p >chambre nuptiale reservé</p>
                    </div>
                   
                   <br>
                    <a href="#" type="button" id="loginbtn" class="btn" onclick="document.getElementById('login-form').style.display='block'">Reserver</a>
                </div>
            </div>
             
</div>

</div>

           <!-- <div class="card">
                <div class="card__title">
                    <h1>Diamant</h1>
                </div>
                <div class="card__items">
                    <div class="item">
                        <i class='bx bx-message-square-check check__icon' ></i>
                        <p>Penteado</p>
                    </div>
                    <div class="item">
                        <i class='bx bx-message-square-check check__icon' ></i>
                        <p>Maquiagem</p>
                    </div>
                    <div class="item">
                        <i class='bx bx-message-square-check check__icon' ></i>
                        <p>Unhas<span>(tradicional francesa)</span></p>
                    </div>
                    <div class="item">
                        <i class='bx bx-message-square-check check__icon' ></i>
                        <p>Depilação<span>(1 area)</span></p>
                    </div>
                    <div class="item">
                        <i class='bx bx-message-square-check check__icon' ></i>
                        <p>Design de sobrancelha</p>
                    </div>
                    <div class="item">
                        <i class='bx bx-message-square-check check__icon' ></i>
                        <p>Limpeza de pele</p>
                    </div>
                    <div class="item">
                        <i class='bx bx-message-square-check check__icon' ></i>
                        <p>Sala de noiva reservada</p>
                    </div>
                    <div class="item">
                        <i class='bx bx-message-square-check check__icon' ></i>
                        <p>Mesa de frutas</p>
                    </div>
                    <button class="btn">quero esse</button>
                </div>
            </div>
        </div>
    </div>-->
    
</section>

  <div class="coeur">  
    <img src="coeur.png">
    <img src="coeur.png">
    <img src="coeur.png">
    <img src="coeur.png">
    <img src="coeur.png">
    <img src="coeur.png">
    <img src="coeur.png">
    <img src="coeur.png">
    <img src="coeur.png">
    <img src="coeur.png">
    <img src="coeur.png">
</div>  


</body>
</html>

<script>
    function alert() {
    alert("Reservation effectuée avec succes");
    }
</script>


