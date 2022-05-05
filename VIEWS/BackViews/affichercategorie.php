<?php
include '../../controller/categorie_c.php';
$categorieC = new categorieC();
$listec = $categorieC->afficherCategorie();
if (isset($_POST['tri']))
{
    if($_POST['tri']=="idASC")
    {$listec=$categorieC->triPrix();}
    if($_POST['tri']=="idDESC")
    {$listec=$categorieC->triPrixDesc();}
    
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Categories Page</title>
    <!--

    Template 2108 Dashboard

	http://www.tooplate.com/view/2108-dashboard

    -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600">
    <!-- https://fonts.google.com/specimen/Open+Sans -->
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/tooplate.css">
</head>

<body id="reportsPage" class="bg02">
    <div class="" id="home">
        <div class="container">
            <div class="row">
                <div class="col-12">
                <?php require_once('navbar.php'); ?>

                </div>
            </div>
            <!-- row -->
            <div class="row tm-content-row tm-mt-big">
                <div class="col-xl-8 col-lg-12 tm-md-12 tm-sm-12 tm-col">
                    <div class="bg-white tm-block h-100">
                        <div class="row">
                            <div class="col-md-8 col-sm-12">
                                <h2 class="tm-block-title d-inline-block">Categorie</h2>

                            </div>
                            <div class="col-md-4 col-sm-12 text-right">
                                <a href="ajoutercategorie.php" class="btn btn-small btn-primary">Ajouter nouvelle catégorie</a>
                            </div>
                        </div>
                        <div class="table-responsive">
                    <table class="table table-hover table-striped tm-table-striped-even mt-3">
                                <thead>
                                    <tr class="tm-bg-gray">
                                        <th scope="col">Id catégorie</th>
                                        <th scope="col" class="text-center">Nom catégorie</th>
                                        <th scope="col" class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <?php
                                        foreach ($listec as $categorie) {
                                        ?>
                                    <tr>
                                        <td><?php echo $categorie['idCategorie']; ?></td>
                                        <td><?php echo $categorie['nomCategorie']; ?></td>
                                        <td>
                                            <a href="modifiercategorie.php?idCategorie=<?php echo $categorie['idCategorie']; ?>" class="btn">Modifier</a>
                                            <a href="supprimercategorie.php?idCategorie=<?php echo $categorie['idCategorie']; ?>" class="btn">Supprimer</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                                 </tr>





                                </tbody>
                            </table>
                        </div>

                        <div class="tm-table-mt tm-table-actions-row">
                            <div class="tm-table-actions-col-left">
                                
                            </div>
                            <div class="tm-table-actions-col-right">
                                <span class="tm-pagination-label">Page</span>
                                <nav aria-label="Page navigation" class="d-inline-block">
                                    <ul class="pagination tm-pagination">
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <span class="tm-dots d-block">...</span>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">13</a></li>
                                        <li class="page-item"><a class="page-link" href="#">14</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-12 tm-md-12 tm-sm-12 tm-col">
                    <div class="bg-white tm-block h-100">
                        
                        <table class="table table-hover table-striped mt-3">
                            <tbody>

                     
                    </div>
                </div>
            </div>
            <footer class="row tm-mt-small">
                <div class="col-12 font-weight-light">
                    <p class="d-inline-block tm-bg-black text-white py-2 px-4">
                        Copyright &copy; 2018 Admin Dashboard . Created by
                        <a rel="nofollow" href="https://www.tooplate.com" class="text-white tm-footer-link">Tooplate</a>
                    </p>
                </div>
            </footer>
        </div>
    </div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script>
        $(function() {
            $('.tm-product-name').on('click', function() {
                window.location.href = "edit-product.html";
            });
        })
    </script>
    <form method="post">
<label>Search</label>
<input type="text" name="search">
<input type="submit" name="submit">
	
</form>
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

</form>
</html>
<?php

$con = new PDO("mysql:host=localhost;dbname=integrationfinale",'root','');

if (isset($_POST["submit"])) {
	$str = $_POST["search"];
	$sth = $con->prepare("SELECT * FROM categorie WHERE idCategorie = '$str'");

	$sth->setFetchMode(PDO:: FETCH_OBJ);
	$sth -> execute();

	if($row = $sth->fetch())
	{
		?>
		<br><br><br>
		<table>
			<tr>
				<th>idCategorie</th>
				<th>nomCategorie</th>
               
			</tr>
			<tr>
				<td><?php echo $row->idCategorie; ?></td>
				<td><?php echo $row->nomCategorie;?></td>
                
			</tr>

		</table>
<?php 
	}
		
		
		else{
			echo "id Does not exist";
		}


}

?>
