<?php
//include 'php.ini';
    $to = $_POST['mail'];
    $subject = $_POST['sujet'];
    $message = $_POST['message'];
    $headers = "From: ahmed.mtibaa@esprit.tn";
    mail ($to,$subject,$message,$headers);
    echo "Mail envoyé";
?>



<!DOCTYPE HTML>
<html lang="en">

<!-- Mirrored from www.ecommerce-admin.com/demo/page-products-table.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 Apr 2022 00:14:42 GMT -->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Eco_speed</title>

  <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">

  <link href="css/bootstrapf9e3.css?v=1.1" rel="stylesheet" type="text/css"/>

  <!-- custom style -->
  <link href="css/uif9e3.css?v=1.1" rel="stylesheet" type="text/css"/>
  <link href="css/responsivef9e3.css?v=1.1" rel="stylesheet" />

  <!-- iconfont -->
  <link rel="stylesheet" href="fonts/material-icon/css/round.css"/>

</head>
<body>

<b class="screen-overlay"></b>

<aside class="navbar-aside" id="offcanvas_aside">
<div class="aside-top">
  <a href="index.html" class="brand-wrap">
    <img src="images/Logo.png" height="46" class="logo" alt="Ecommerce dashboard template">
  </a>
  <div>
    <button class="btn btn-icon btn-aside-minimize"> <i class="text-muted material-icons md-menu_open"></i> </button>
  </div>
</div> <!-- aside-top.// -->

<nav>
	  <ul class="menu-aside">
		<li class="menu-item active"> 
		  <a class="menu-link" href="index.php"> <i class="icon material-icons md-home"></i> 
			<span class="text">Acceuil</span> 
		  </a> 
		</li>
	   
		<li class="menu-item has-submenu"> 
		<a class="menu-link" href="afficher_boutique.php"> <i class="icon material-icons md-person"></i>  
			<span class="text">Boutiques</span> 
		  </a> 
		  <div class="submenu">
			<a href="ajouter_boutique.php">Ajouter Boutique</a>
			<a href="afficher_boutique.php">Afficher Boutique</a>
			<a href="recherche_boutique.php">Recherche</a>
			<a href="statistiques_boutique.html">Statistiques</a>
			<a href="mailing_boutique.html">Mailing</a>
		  </div>
		</li>
		<li class="menu-item has-submenu"> 
		<a class="menu-link" href="afficher_ouvrier.php"> <i class="icon material-icons md-person"></i>  
			<span class="text">Ouvriers</span> 
		  </a> 
		  <div class="submenu">
		  <a href="ajouter_ouvrier.php">Ajouter ouvrier</a>
			<a href="afficher_ouvrier.php">Afficher ouvrier</a>
			<a href="recherche_ouvrier.php">Recherche & Tri</a>
			<a href="statistiques_ouvrier.html">Statistiques</a>
			<a href="mailing_ouvrier.html">Mailing</a>
			</div>
		</li>
		<li class="menu-item has-submenu"> 
		  <a class="menu-link" href="ajouter_factures.html"> <i class="icon material-icons md-shopping_bag"></i>  
			<span class="text">Factures</span> 
		  </a> 
		  <div class="submenu">
			<a href="ajouter_factures.html">Ajouter Facture</a>
			<a href="modifier_factures.html">Modifier Facture</a>
			<a href="supprimer_factures.html">Supprimer Factures</a>
			<a href="afficher_factures.html">Afficher Factures</a>
			<a href="calculatrice.html">Calculatrice</a>
			<a href="mailing_factures.html">Mailing</a>
			<a href="qrcode.html">QR code</a>
			<a href="pdf_Excel_factures.html">PDF & Excel</a>
		  </div>
		</li>
		<li class="menu-item has-submenu"> 
		  <a class="menu-link" href="page-orders-1.html"> <i class="icon material-icons md-shopping_cart"></i> 
			<span class="text">Commandes</span> 
		  </a>
		  <div class="submenu">
			<a href="page-orders-1.html">Commandes liste 1</a>
			<a href="page-orders-2.html">Commandes list 2</a>
			<a href="page-orders-detail.html">Détail des commandes</a>
		  </div> 
		</li>
		<li class="menu-item has-submenu"> 
		  <a class="menu-link" href="page-form-product-1.html"> <i class="icon material-icons md-add_box"></i>  
			<span class="text">Produits</span> 
		  </a> 
		  <div class="submenu">
			<a href="ajouter_produits.html">Ajouter Produits</a>
			<a href="modifier_produits.html">Modifier produits</a>
			<a href="supprimer_produits.html">Supprimer Produits</a>
			<a href="afficher_produits.html">Afficher Produits</a>
			<a href="rechercher_tri_produits.html">Recherche & Tri</a>
			<a href="statistique_produits.html">Statistiques</a>
			<a href="mailing_boutique.html">Mailing</a>
			<a href="pdf_Excel_boutique.html">PDF & Excel</a>
		  </div>
		</li>
		<li class="menu-item has-submenu"> 
		  <a class="menu-link" href="page-form-product-1.html"> <i class="icon material-icons md-add_box"></i>  
			<span class="text">Station Recharge</span> 
		  </a> 
		  <div class="submenu">
			<a href="ajouter_station.html">Ajouter station</a>
			<a href="modifier_station.html">Modifier station</a>
			<a href="supprimer_station.html">Supprimer station</a>
			<a href="afficher_station.html">Afficher station</a>
			<a href="rechercher_tri_station.html">Recherche & Tri</a>
			<a href="statistique_station.html">Statistiques</a>
			<a href="Calcul_gain.html">Calcul Gain</a>
		  </div>
		</li>
		<li class="menu-item has-submenu">
		  <a class="menu-link" href="page-transactions-A.html"> <i class="icon material-icons md-monetization_on"></i> 
			<span class="text">Transactions</span> 
		  </a> 
		  <div class="submenu">
			<a href="page-transactions-A.html">Transaction 1</a>
			<a href="page-transactions-B.html">Transaction 2</a>
		  </div>
		</li>
		<li class="menu-item has-submenu"> 
		  <a class="menu-link" href="#"> <i class="icon material-icons md-person"></i>  
			<span class="text">Utilisateurs</span> 
		  </a> 
		  <div class="submenu">
		  <a class="menu-link" href="#"> <i class="icon material-icons md-person"></i>  
			<a href="#">Ajouter Utilisateurs</a>
			<a href="#">Modifier Utilisateurs</a>
			<a href="#">Supprimer Utilisateurs</a>
			<a href="#l">Afficher Utilisateurs</a>
			<a href="#">Recherche & Tri</a>
			<a href="#">Classification Utilisateurs</a>
			<a href="#">Calcul Nombre Utilisateurs</a>
			<a href="#">Mailing</a>
			<a href="#">PDF</a>
			</div>
			</li>
	  </ul>
	  <hr>
	</nav>
</aside>
<main class="main-wrap">
    <header class="main-header navbar">
        <div class="col-search">
            <form class="searchform">
                <div class="input-group">
                  <input list="search_terms" type="text" class="form-control" placeholder="Search term">
                  <button class="btn btn-light bg" type="button"> <i class="material-icons md-search"></i> </button>
                </div>
                <datalist id="search_terms">
                  <option value="Products">
                  <option value="New orders">
                  <option value="Apple iphone">
                  <option value="Ahmed Hassan">
                </datalist>
            </form>
        </div>
        <div class="col-nav">
             <button class="btn btn-icon btn-mobile me-auto" data-trigger="#offcanvas_aside"> <i class="md-28 material-icons md-menu"></i> </button>
             <ul class="nav">
              <li class="nav-item">
                  <a class="nav-link btn-icon" onclick="darkmode(this)" title="Dark mode" href="#"> <i class="material-icons md-nights_stay"></i> </a>
              </li>
              <li class="nav-item">
                <a class="nav-link btn-icon" href="#"> <i class="material-icons md-notifications_active"></i> </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"> English </a>
              </li>
              <li class="dropdown nav-item">
                <a class="dropdown-toggle" data-bs-toggle="dropdown" href="#"> <img class="img-xs rounded-circle" src="images/people/avatar1.jpg" alt="User"></a>
                <div class="dropdown-menu dropdown-menu-end">
                  <a class="dropdown-item" href="#">My profile</a>
                  <a class="dropdown-item" href="#">Settings</a>
                  <a class="dropdown-item text-danger" href="#">Exit</a>
                </div>
              </li>
            </ul> 
        </div>
    </header>

    <section class="content-main">

        <div class="content-header">
            <h2 class="content-title">Mailing</h2>
            
        </div>
	    <div class="card mb-4">
          <div class="card-body">
			      <form action="testmail.php" method="post">
				       <div class="mb-4">
					      <label for="Email" class="form-label">Email : </label>
					     <input type="email" placeholder="Mail@gmail.com" name="to" id="to" value="">
				       </div>
          <div class="mb-4"> 
					<label for="id" class="form-label">Tapez votre sujet: </label>
					<input type="text" placeholder="sujet" name="sujet" id="sujet" value="">
				   </div>
           <div class="mb-4"> 
            <label for="id" class="form-label">Tapez votre Mail: </label>
           <input type="text" placeholder="***" name="message" id="message" value="">
          </div>
				</div>
				<button class="btn btn-primary">Envoyer</button>


               

            </div> <!-- card-body end// -->
        </div> <!-- card end// -->


    </section> <!-- content-main end// -->
</main>

<script>
    if(localStorage.getItem("darkmode")){
        var body_el = document.body;
        body_el.className += 'dark';
    }
</script>

<script src="js/jquery-3.5.0.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>

<!-- Custom JS -->
<script src="js/scriptc619.js?v=1.0"></script>

</body>

<!-- Mirrored from www.ecommerce-admin.com/demo/page-products-table.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 Apr 2022 00:14:42 GMT -->
</html>
