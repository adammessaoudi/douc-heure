<?php
   
    include_once '../../controller/categorie_c.php';
    include_once '../../model/categorie.php';

        $error = "";
  
      $categorie = null;

    $categorieC = new categorieC();
    if ( 
        isset($_POST["nomCategorie"]) 
        ) {
        if (
            !empty($_POST["nomCategorie"])    
        ) {
            $categorie= new categorie(
                $_POST['nomCategorie'] 
            
            );
            $categorieC->ajouterCategorie($categorie);
            header('Location:affichercategorie.php');
        }
        else
            $error = "Missing information";
    }

    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Product - Dashboard Admin Template</title>
    <!--

    Template 2108 Dashboard

	http://www.tooplate.com/view/2108-dashboard

    -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600">
    <!-- https://fonts.google.com/specimen/Open+Sans -->
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="jquery-ui-datepicker/jquery-ui.min.css" type="text/css" />
    <!-- http://api.jqueryui.com/datepicker/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/tooplate.css">
</head>

<body class="bg02">
    <div class="container">
        <div class="row">
            <div class="col-12">
            <?php require_once('navbar.php'); ?>

            </div>
        </div>
        <!-- row -->
        <div class="row tm-mt-big">
            <div class="col-xl-8 col-lg-10 col-md-12 col-sm-12">
                <div class="bg-white tm-block">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="tm-block-title d-inline-block">Add categorie</h2>
                        </div>
                    </div>
                    <div class="details">
                    <div class="recentorders">
                        <div class="cardheader">
                            <h2>Ajouter Catégorie</h2>
                            
                            </div>
        
        <form action="" method="POST">

           
                
                <tr>
                    <td>
                        <label for="nomCategorie">Nom du catégorie:
                        </label>
                    </td>
                    <td><input type="text" name="nomCategorie" id="nomCategorie" maxlength="20"></td>
                </tr>
                
                
                    <tr>
                    <td>
                    <input type="submit" class="btn" value="Envoyer">
                        <input type="reset"  class="btn" value="Annuler" >
                        </td>
                </tr>
            </table>
        </form>
                        <button class="btn"><a href="affichercategorie.php">Retour à la liste des catégories</a></button>
</div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="row tm-mt-big">
            <div class="col-12 font-weight-light">
                <p class="d-inline-block tm-bg-black text-white py-2 px-4">
                    Copyright &copy; 2018 Admin Dashboard . Created by
                    <a rel="nofollow" href="https://www.tooplate.com" class="text-white tm-footer-link">Tooplate</a>
                </p>
            </div>
        </footer>
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="jquery-ui-datepicker/jquery-ui.min.js"></script>
    <!-- https://jqueryui.com/download/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script>
        $(function () {
            $('#expire_date').datepicker();
        });
    </script>
</body>

</html>