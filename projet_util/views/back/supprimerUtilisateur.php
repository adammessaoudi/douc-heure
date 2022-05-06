<?php
 include_once 'C:\xampp\htdocs\projet_util (1)\projet_util\controller\utilisateursC.php';
 $utilisateur = new utilisateurc();
 if(isset($_GET['idUtilisateur'])){
     $utilisateur->supprimerutilisateur($_GET['idUtilisateur']);
 
    header('Location: AfficherListeU.php');
    }

 ?>