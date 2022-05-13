<?php

$servername="localhost" ; 
$username="root" ; 
$password="" ; 
$dbname="integration" ;
$conn=mysqli_connect($servername,$username,$password,$dbname); 
 $query="select * from reservation" ; 
 $result=mysqli_query($conn,$query) ;  
 if (isset($_POST["ajouter"])) 
 { 
     $id=$_POST["id"] ;
   $nom=$_POST["nom"] ; 
   $prenom=$_POST["prenom"] ; 
   $mail=$_POST["mail"] ; 
   $numero=$_POST["numero"] ; 
   $partydate=$_POST["partydate"] ; 
   $cat=$_POST["cat"] ; 
   $area=$_POST["area"] ; 
   $cat2=$_POST["cat2"] ; 
       $sql="INSERT INTO reservation(id,firstname,lastname,email,telephone,datedereservation,choix,commentaire) VALUES('$id','$nom','$prenom','$mail','$numero','$partydate','$cat','$area')" ; 
       mysqli_query($conn,$sql) ;
        $sqll="INSERT INTO categoriereservation(id,categoriee) VALUES('$id','$cat2')" ; 
       mysqli_query($conn,$sqll) ;
      
  }
  ?>
  <!DOCTYPE html>
  <html lang="pt-br"> 
  <style> 
    .iconify
    { 
        position: relative; 
        left:320px;
    }
    </style>
  <head>
      
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>douc'heure</title> 
      <link rel="shortcut icon" href="assests/img/favicon.png" type="image/x-icon">
      <!-- icon -->
    
      <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
      <!--css -->
      <link rel="stylesheet" href="pr.css"> 
   <script src="jsf.js"></script>
   <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>

  </head> 
  
  <body>
  <form id="f" method="POST" action="">  
   
  

      <header class="header" id="header"> 
          <div class="menuf">
              <div class="brand">
                  <img scr="logo2.png">
                  <a  href="#"><img src="logoo.png" alt=""></a>
              </div>
              <div class="nav-menu" id="nav-menu">
                  <ul class="nav-list">
                      <li class="nav__item"><a href="../index.html" class="nav-champ">home</a></li>
                      <li class="nav__item"><a href="../../Front/magasin/Web2A19/VIEWS/FrontViews/store.php" class="nav-champ">magasin</a></li>
                      <li class="nav__item"><a href="" class="nav-champ">service</a></li>
                      <li class="nav__item"><a href="../paquets/views/Front/index.php" class="nav-champ">paquets</a></li>
                      <li class="nav__item"><a href="" class="nav-champ">galerie</a></li>
                      <li class="nav__item"><a href="../../Front/forum/reclamation/Views/front/reclamation/ajoutReclamation.php" class="nav-champ">forum</a></li>
                      <li class="nav__item"><a href="../../front/forum/reclamation/Views/front/rating/ajoutRating.php" class="nav-champ">rating</a></li>
                   <a href="../../Front/panier/fakhripanier/tache commande/views/front/index.php?page=products">   <span class="iconify" data-icon="clarity:shopping-cart-solid" data-width="45" data-height="35"></span> </a>                     

                      <a href="../login/projet_util/views/inscription.php" class="bt"  type="submit"value="">sign up</a> 

                    <!--<button class="btnn">sign in</button>-->
                  </ul>
              </div> 
              
  </div>
       <div class="container">
          <div class="card">
            <div class="face face1">
              <div class="content">
                 <i class="fab fa-windows"></i>            
                <h2>vernis à ongles</h2>
            <br>
              <img src="servic/manicure.png" alt="">
           
              </div>
            </div>
            <div class="face face2">
              <div class="content">
                  <br>
                <p><h2>vernis à ongles </h2></p>
                <br>
               
      <ul class="slides">
          <input for="img-1" type="radio" name="radio-btn1" id="img-1"  checked />
          <li class="slide-container">
              <div class="slide">
               <img src="les services/vernis a ongle/ongle1.jpg"   />
                  <label class="descriptionservice" >  <h2><BR> vernis permanent</h2><br><br> <h2>prix:20D</h2></label>
              </div>
             
          </li>
      
          <input type="radio" name="radio-btn1" id="img-2"  />
          <li class="slide-container">
              <div class="slide">
               <img src="les services/vernis a ongle/ongle5.jpg"/>
               <label class="descriptionservice" >  <h3> gel sur ongles naturels</h3><br><br> <h2>prix:           40D</h2></label>
              </div>
          </li>
      
          <input type="radio" name="radio-btn1" id="img-3"  />
          <li class="slide-container">
              <div class="slide">
                <img src="les services/vernis a ongle/ongle3.jpg" />
              
              <label class="descriptionservice" >  <h3> gel+vernis permanent sur ongles naturels</h3><br><br> <h2>prix:       50D</h2></label>
            </div>
          </li>
      
          <input type="radio" name="radio-btn1" id="img-4"  />
          <li class="slide-container">
              <div class="slide">
                <img src="les services/vernis a ongle/ongle4.jpg" />
                <label class="descriptionservice" >  <h3> Capsules+gel+vernis permanent</h3><br><br> <h2>prix:       120D</h2></label>
  
              </div>
             
          </li>
      
          <input type="radio" name="radio-btn1" id="img-5" />
          <li class="slide-container">
              <div class="slide">
                <img src="les services/vernis a ongle/ongle2.jpg" />
                <label class="descriptionservice" >  <h3> Design</h3><br><br> <h2>prix:       80D</h2></label>
  
              </div>
            
          </li>
      
        <!--  <input type="radio" name="radio-btn1" id="img-6" />
          <li class="slide-container">
              <div class="slide">
                <img src="les serviceS/vernis a ongle/ongle6.jpg" />
                <label class="descriptionservice" >  <h3> vernis chic</h3><br><br> <h2>prix:       100D</h2></label>
  
              </div>
             
          </li>-->
      
          <li class="nav-dotsvernis">
            <label for="img-1" class="nav-dovernist" id="img-dot-1"></label>
            <label for="img-2" class="nav-dotvernis" id="img-dot-2"></label>
            <label for="img-3" class="nav-dotvernis" id="img-dot-3"></label>
            <label for="img-4" class="nav-dotvernis" id="img-dot-4"></label>
            <label for="img-5" class="nav-dotvernis" id="img-dot-5"></label>
            <label for="img-6" class="nav-dotvernis" id="img-dot-6"></label>
          </li>
      </ul>
                <a href="#" class="bt"type="button" id="loginbtn" onclick="document.getElementById('login-form').style.display='block'" style="width:auto;">reservé</a>
              
              
              </div>
            </div>
         </div>
         </div>
  
  <!--maquillage service -->
         <div class="container1">
          <div class="card1">
            <div class="face face11">
              <div class="content1">
                 <i class="fab fa-windows"></i>            
                 <h2>maquillage</h2>
              <br>
              <img src="servic/maquiagem.png" alt="">    
              </div>
            </div>
            <div class="face face21">
              <div class="content1">
                  <br>
                <p><h2>maquillage </h2></p>
                <br>
               <!-- <p><select  class="optionservice"size="1" name="">
                  <option>choisir</option>
                  <option>vernis couleur normal</option>
                  <option>gg</option>
                  <option>ggg</option>
                  <option>ggg</option>
                  <option>ggge</option>
                  <option>eezgzze</option>
                  <option>egzgezez</option>
                  <option>zegezgezgz</option>
                  </select></p> -->
                 <!--slide image -->
      <ul class="slides1">
          <input class="inputt" type="radio" checked name="radio-btn2" id="img1-1"  />
          <li class="slide-container1">
              <div class="slide1">
               <img src="les services/maquillage service/maquillage.jpg"/>
                  <label class="descriptionservice" >  <h3>Maquillage Complet</h3><br><br> <h2>prix:      120D</h2></label>
              </div>
             
          </li>
      
          <input  type="radio"  class="inputt"name="radio-btn2" id="img1-2"  />
          <li class="slide-container1">
              <div class="slide1">
               <img src="les services/maquillage service/maquillage2.jpg"/>
               <label class="descriptionservice" >  <h3> Maquillage des Yeux</h3><br><br> <h2>prix:       50D</h2></label>

              </div>
            
          </li>
      
          <input type="radio" class="inputt" name="radio-btn2" id="img1-3" />
          <li class="slide-container1">
              <div class="slide1">
                <img src="les services/maquillage service/maquillage3.jpg" />
                <label class="descriptionservice" >  <h3> Faux Cils</h3><br><br> <h2>prix:           40D</h2></label>

              </div>    
          </li>
    
          <input type="radio"  class="inputt" name="radio-btn2" id="img1-4" />
          <li class="slide-container1">
              <div class="slide1">
                <img src="les services/maquillage service/maquillage4.jpg" />
                <label class="descriptionservice" >  <h3> Cil à Cil</h3><br><br> <h2>prix:           30D</h2></label>

              </div>   
          </li>
          <input type="radio"  class="inputt" name="radio-btn2" id="img1-5" />
          <li class="slide-container1">
              <div class="slide1">
                <img src="les services/maquillage service/maquillage5.jpg" />
                <label class="descriptionservice" >  <h3>Pose Foulard</h3><br><br> <h2>prix:           100D</h2></label>

              </div>
            
          </li>
      <!--
          <input type="radio" class="inputt" name="radio-btn2" id="img1-6" />
          <li class="slide-container1">
              <div class="slide1">
                <img src="les services/maquillage service/maquillage6.jpg" />
                <label class="descriptionservice" >  <h3> simple de plusieurs coleur</h3><br><br> <h2>prix:           30D</h2></label>

              </div>
             
          </li> -->
      
          <li class="nav-dots1">
            <label for="img1-1" class="nav-dot1" id="img-dot-1"></label>
            <label for="img1-2" class="nav-dot1" id="img-dot-2"></label>
            <label for="img1-3" class="nav-dot1" id="img-dot-3"></label>
            <label for="img1-4" class="nav-dot1" id="img-dot-4"></label>
            <label for="img1-5" class="nav-dot1" id="img-dot-5"></label>
           <!-- <label for="img1-6" class="nav-dot1" id="img-dot-6"></label> -->
          </li>
      </ul>
             <!--   <a href="#" class="bt"type="button">reservé</a> -->
                <a href="#" class="bt"type="button" id="loginbtn" onclick="document.getElementById('login-form').style.display='block'" style="width:auto;">reservé</a>
              </div>
            </div>
         </div>
         </div>
           <div class="container2">
    <div class="card1">
      <div class="face face11">
        <div class="content1">
           <i class="fab fa-windows"></i>            
           <h2>COIFFURE</h2>
        <BR>

        <img src="servic/corte.png" alt="">   
        </div>
      </div>
      <div class="face face21">
        <div class="content1">
            <br>
          <p><h2>COIFFURE </h2></p>
          <br>
         <!-- <p><select  class="optionservice"size="1" name="">
            <option>choisir</option>
            <option>vernis couleur normal</option>
            <option>gg</option>
            <option>ggg</option>
            <option>ggg</option>
            <option>ggge</option>
            <option>eezgzze</option>
            <option>egzgezez</option>
            <option>zegezgezgz</option>
            </select></p> -->
           <!--slide image -->
  <ul class="slides1">
    <input class="inputt" type="radio" name="radio-btn3" id="img2-1" checked />
    <li class="slide-container1">
        <div class="slide1">
         <!--   <img src="http://farm9.staticflickr.com/8072/8346734966_f9cd7d0941_z.jpg" />-->
         <img src="les services/coiffure/coiffure1.jpg"/>
            <label class="descriptionservice" >  <h3>Coupe</h3><br><br> <h2>prix:           30D</h2></label>
        </div>
       
    </li>
  
    <input  type="radio"  class="inputt"name="radio-btn3" id="img2-2"  />
    <li class="slide-container1">
        <div class="slide1">
         <!--  <img src="http://farm9.staticflickr.com/8504/8365873811_d32571df3d_z.jpg" />-->
         <img src="les services/coiffure/coiffure2.jpg"/>
         <label class="descriptionservice" >  <h3>keratine</h3><br><br> <h2>prix:           30D</h2></label>

        </div>
       <!-- <div class="nav">
            <label for="img-1" class="prev">&#x2039;</label>
            <label for="img-3" class="next">&#x203a;</label>
        </div>-->
    </li>
  
    <input type="radio" class="inputt" name="radio-btn3" id="img2-3" />
    <li class="slide-container1">
        <div class="slide1">
          <img src="les services/coiffure/coiffure3.jpg" />
          <label class="descriptionservice" >  <h3>Mèche L’Oréal platinium(à partir)</h3><br><br> <h2>prix:           80D</h2></label>

        </div>
        
    </li>
  
    <input type="radio"  class="inputt" name="radio-btn3" id="img2-4" />
    <li class="slide-container1">
        <div class="slide1">
          <img src="les services/coiffure/coiffure4.jpg" />
          <label class="descriptionservice" >  <h3>Coloration racine majnel (à partir)</h3><br><br> <h2>prix:           30D</h2></label>

        </div>
       
    </li>
  
    <input type="radio"  class="inputt" name="radio-btn3" id="img2-5" />
    <li class="slide-container1">
        <div class="slide1">
          <img src="les services/coiffure/coiffure5.jpg" />
          <label class="descriptionservice" >  <h3>Coiffure chignon</h3><br><br> <h2>prix:           20D</h2></label>

        </div>
      
    </li>
  
    <input type="radio" class="inputt" name="radio-btn3" id="img2-6" />
    <li class="slide-container1">
        <div class="slide1">
          <img src="les services/coiffure/coiffure6.jpg" />
          <label class="descriptionservice" >  <h3>Soin prokératine</h3><br><br> <h2>prix:           220D</h2></label>

        </div>
       
    </li>
  
    <li class="nav-dots1">
      <label for="img2-1" class="nav-dot1" id="img-dot-1"></label>
      <label for="img2-2" class="nav-dot1" id="img-dot-2"></label>
      <label for="img2-3" class="nav-dot1" id="img-dot-3"></label>
      <label for="img2-4" class="nav-dot1" id="img-dot-4"></label>
      <label for="img2-5" class="nav-dot1" id="img-dot-5"></label>
      <label for="img2-6" class="nav-dot1" id="img-dot-6"></label>
    </li>
  </ul>
  <a href="#" class="bt"type="button" id="loginbtn" onclick="document.getElementById('login-form').style.display='block'" style="width:auto;">reservé</a>
  </div>
      </div>
   </div>
   </div>
   <!--ssssssssssssssssssssssssssourcilllllllllllllllllllllllll -->
   <div class="container3">
    <div class="card1">
      <div class="face face11">
        <div class="content1">
           <i class="fab fa-windows"></i>            
           <h2>SOURCIL</h2>
        <BR>
        <img src="servic/sobrancelha.png" alt=""> 
        </div>
      </div>
      <div class="face face21">
        <div class="content1">
            <br>
          <p><h2>SOURCIL </h2></p>
          <br>
         <!-- <p><select  class="optionservice"size="1" name="">
            <option>choisir</option>
            <option>vernis couleur normal</option>
            <option>gg</option>
            <option>ggg</option>
            <option>ggg</option>
            <option>ggge</option>
            <option>eezgzze</option>
            <option>egzgezez</option>
            <option>zegezgezgz</option>
            </select></p> -->
           <!--slide image -->
  <ul class="slides1">
    <input class="inputt" type="radio" name="radio-btn4" id="img3-1" checked />
    <li class="slide-container1">
        <div class="slide1">
         <!--   <img src="http://farm9.staticflickr.com/8072/8346734966_f9cd7d0941_z.jpg" />-->
         <img src="les services/sourcil/sourcil1.jpg"/>
            <label class="descriptionservice" >  <h3> Restructuration des sourcils</h3><br><br> <h2>prix:           90D</h2></label>
        </div>
       
    </li>
  
    <input  type="radio"  class="inputt"name="radio-btn4" id="img3-2"  />
    <li class="slide-container1">
        <div class="slide1">
         <!--  <img src="http://farm9.staticflickr.com/8504/8365873811_d32571df3d_z.jpg" />-->
         <img src="les services/sourcil/sourcil2.jpg"/>
         <label class="descriptionservice" >  <h3>Épilation entretien sourcils</h3><br><br> <h2>prix:           60D</h2></label>

        </div>
       <!-- <div class="nav">
            <label for="img-1" class="prev">&#x2039;</label>
            <label for="img-3" class="next">&#x203a;</label>
        </div>-->
    </li>
    
    <input type="radio" class="inputt" name="radio-btn4" id="img3-3" />
    <li class="slide-container1">
        <div class="slide1">
          <img src="les services/sourcil/sourcil3.jpg" />
          <label class="descriptionservice" >  <h3>Teinture des sourcil</h3><br><br> <h2>prix:           60D</h2></label>

        </div>
        
    </li>
  
    <input type="radio"  class="inputt" name="radio-btn4" id="img3-4" />
    <li class="slide-container1">
        <div class="slide1">
          <img src="les services/sourcil/sourcil4.jpg" />
          <label class="descriptionservice" >  <h3>Brow lift avec teinture</h3><br><br> <h2>prix:           120D</h2></label>

        </div>
       
    </li>
  
    <input type="radio"  class="inputt" name="radio-btn4" id="img3-5" />
    <li class="slide-container1">
        <div class="slide1">
          <img src="les services/sourcil/sourcil5.jpg" />
          <label class="descriptionservice" >  <h3>Henné végétal des sourcils</h3><br><br> <h2>prix:           105D</h2></label>

        </div>
      
    </li>
  
    <input type="radio" class="inputt" name="radio-btn4" id="img3-6" />
    <li class="slide-container1">
        <div class="slide1">
          <img src="les services/sourcil/sourcil6.jpg" />
          <label class="descriptionservice" >  <h3>Brow lift</h3><br><br> <h2>prix:           105D</h2></label>

        </div>
       
    </li>
  
    <li class="nav-dots1">
      <label for="img3-1" class="nav-dot1" id="img-dot-1"></label>
      <label for="img3-2" class="nav-dot1" id="img-dot-2"></label>
      <label for="img3-3" class="nav-dot1" id="img-dot-3"></label>
      <label for="img3-4" class="nav-dot1" id="img-dot-4"></label>
      <label for="img3-5" class="nav-dot1" id="img-dot-5"></label>
      <label for="img3-6" class="nav-dot1" id="img-dot-6"></label>
    </li>
  </ul>
  <a href="#" class="bt"type="button" id="loginbtn" onclick="document.getElementById('login-form').style.display='block'" style="width:auto;">reserver</a>
        </div>
      </div>
   </div>
   </div>
   <!-- n//////////////////////////////////////////////////////nottoyage de la peau//////////////////////-->
   <div class="container4">
    <div class="card1">
      <div class="face face11">
        <div class="content1">
           <i class="fab fa-windows"></i>            
           <h2>nottoyage de la peau</h2>
        <BR>
          <img src="servic/limpeza.png" alt="">  
        </div>
      </div>
      <div class="face face21">
        <div class="content1">
            <br>
          <p><h2>nottoyage de la peau </h2></p>
          <br>
         
           <!--slide image -->
  <ul class="slides1">
    <input class="inputt" type="radio" name="radio-btn5" id="img4-1" checked />
    <li class="slide-container1">
        <div class="slide1">
         <!--   <img src="http://farm9.staticflickr.com/8072/8346734966_f9cd7d0941_z.jpg" />-->
         <img src="les services/nottoyage de la peau/peau1.jpg"/>
            <label class="descriptionservice" >  <h3>Soin Spécifique</h3><br><br> <h2>prix:           30D</h2></label>
        </div>
       
    </li>
  
    <input  type="radio"  class="inputt"name="radio-btn5" id="img4-2"  />
    <li class="slide-container1">
        <div class="slide1">
         <!--  <img src="http://farm9.staticflickr.com/8504/8365873811_d32571df3d_z.jpg" />-->
         <img src="les services/nottoyage de la peau/peau2.jpg"/>
         <label class="descriptionservice" >  <h3> Soin Anti-Rides GUINOT</h3><br><br> <h2>prix:           30D</h2></label>

        </div>
       <!-- <div class="nav">
            <label for="img-1" class="prev">&#x2039;</label>
            <label for="img-3" class="next">&#x203a;</label>
        </div>-->
    </li>
  
    <input type="radio" class="inputt" name="radio-btn5" id="img4-3" />
    <li class="slide-container1">
        <div class="slide1">
          <img src="les services/nottoyage de la peau/peau3.jpg" />
          <label class="descriptionservice" >  <h3>Soin D-COOL</h3><br><br> <h2>prix:           30D</h2></label>

        </div>
        
    </li>
  
    <input type="radio"  class="inputt" name="radio-btn5" id="img4-4" />
    <li class="slide-container1">
        <div class="slide1">
          <img src="les services/nottoyage de la peau/peau4.jpg" />
          <label class="descriptionservice" >  <h3>Soin BABY GLOW</h3><br><br> <h2>prix:           30D</h2></label>

        </div>
       
    </li>
  
    <input type="radio"  class="inputt" name="radio-btn5" id="img4-5" />
    <li class="slide-container1">
        <div class="slide1">
          <img src="les services/nottoyage de la peau/peau5.jpg" />
          <label class="descriptionservice" >  <h3> Soin Eclat</h3><br><br> <h2>prix:           30D</h2></label>

        </div>
      
    </li>
  <!--
    <input type="radio" class="inputt" name="radio-btn5" id="img4-6" />
    <li class="slide-container1">
        <div class="slide1">
          <img src="les services/nottoyage de la peau/peau6.jpg" />
          <label class="descriptionservice" >  <h3> simple de plusieurs coleur</h3><br><br> <h2>prix:           30D</h2></label>

        </div>
       
    </li>
-->
    <li class="nav-dots1">
      <label for="img4-1" class="nav-dot1" id="img-dot-1"></label>
      <label for="img4-2" class="nav-dot1" id="img-dot-2"></label>
      <label for="img4-3" class="nav-dot1" id="img-dot-3"></label>
      <label for="img4-4" class="nav-dot1" id="img-dot-4"></label>
      <label for="img4-5" class="nav-dot1" id="img-dot-5"></label>
    <!--  <label for="img4-6" class="nav-dot1" id="img-dot-6"></label>-->
    </li>
  </ul>
  <a href="#" class="bt"type="button" id="loginbtn" onclick="document.getElementById('login-form').style.display='block'" >reservé</a>
  
        </div>
      </div>
   </div>
   </div>   
  
    </header>
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
  

  <div id='login-form'class='login-page'>
  <div class="form-box">
    
  <div class="reserv">RESERVATION</div>
  <div id='register' class='input-group-register'>
    <input type='text'class='input-field'placeholder='id' id="id" name="id" >
    <input type='text'class='input-field'placeholder='First Name' id="nom" name="nom" >
    <input type='text'class='input-field'placeholder='Last Name ' id="prenom" name="prenom">
    <input type='email'class='input-field'placeholder='Email' id="mail" name="mail" >
    <input type='text'class='input-field'placeholder='votre numero de telephone' id="numero" name="numero">
    <div class="textdate">date de reservation</div><input class="date" id="party"type="date" name="partydate" value="">
    <br>
    <div class="select">service </div>
    <p><select class="choisirservice" size="1" id="cat" name="cat" onchange="random_function()">
    <option  >choisir</option>
    <option id="coiffure" value="coiffure">coiffure</option>
      <option value="maquillage">maquillage</option>
      <option value="vernis">vernis a ongles</option>
      <option value="sourcil"> sourcil</option>
      <option value="nottoyage">nottoyage de la peau</option>
      </select></p> 
      <br> 
      <select class="choisir" name="cat2" id="cat2">
        <option></option>
      </select>
    <p><textarea  type="text"class="area"rows="5" name="area" cols="40" id="textarea" placeholder="commenter ici"></textarea></p> 
   <form id="f" method="POST" >
    <button type='submit' name="ajouter" onclick="return verif()" class='submit-btn' formaction="promo.php" >reserver</button>
   </form> 

<button type='submit'class='quitter-btn' onclick="document.getElementById('login-form').style.display='none'" >quitter</button>

  </div>
</div> 
</div>
</form>
  <script src="jsf.js"></script>
      </body>
  
  </html>