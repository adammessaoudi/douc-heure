<?php
 
 include_once "../../../controller/ratingC.php";
 include_once "../../../model/rating.php";
$ratingC=new ratingC();

if(isset($_POST['supprimer'])){
   
   $ratingC->supprimerrating($_POST['id']);
   header('location: listrating.php');
 } 

 ?>