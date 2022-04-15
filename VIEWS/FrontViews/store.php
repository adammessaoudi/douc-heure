<?PHP

include "../../controller/produitC.php";
include "../../controller/categorie_c.php";


$produitC = new produitC();
$listeProduit = $produitC->afficherProduit();
$categorieC = new categorieC();
$listeCategorie = $categorieC->afficherCategorie();
$categorieC = new categorieC();

// $listeLocal = $localC->afficherLocal();
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
                    <li class="nav__item"><a href="store.php" class="nav__link active-link">magasin</a></li>
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
		<div class="content py-md-0 py-3">
			<section id="sidebar">
				<div class="py-3">
					<h5 class="font-weight-bold">Categories</h5>
					<ul class="list-group">
						<?php foreach ($listeCategorie as $categorieC) : ?>
							<li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center category"> <?php echo $categorieC['nomCategorie']; ?>
								<span class="badge badge-primary badge-pill">328</span>
							</li>
						<?php endforeach; ?>
					</ul>
				</div>
				
			</section> <!-- Products Section -->
			<section id="products">
				<div class="container py-3">
					<div class="row">
					<?php foreach ($listeProduit as $produit) : ?>
						<div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1">
							<div class="card"> <img class="card-img-top" src="img/cour/<?php echo $produit['img'] ?>">
								<div class="card-body">
									<h6 class="font-weight-bold pt-1"><?php echo $produit['libelle'] ?></h6>
									<div class="text-muted description"><?php echo $produit['description'] ?></div>

									
									<div class="d-flex align-items-center justify-content-between pt-3">
										<div class="d-flex flex-column">

											<div class="h6 font-weight-bold"> <?php echo $produit['prix'] ?> DT <br> <br> <br>  </br>
										</div>
										</div>
										
										<div class="btn btn-primary" style="background-color: #2A2A2A">Buy now</div> <br> <br>  </br>
									</div>
								</div>
							</div>
						</div>
						<?php endforeach; ?>
					</div>
				</div>
			</section>
		</div>
	</div>
					
				
</body>

</html>