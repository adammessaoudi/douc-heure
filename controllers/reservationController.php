<?php
define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__.'/config.php');
include_once(__ROOT__.'/controllers/reservationController.php');
class reservationController
{

    function afficherReservations(){
        $sql="select * from reservations";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
    }
    catch(Exception $e){
        echo 'Erreur: '.$e->getMessage();
    }
}


public function ajouterReservation($reservation){
    $sql="insert into reservations(firstname,lastname,email,telephone,datedereservation,idforfait) values(:firstname,:lastname,:email,:telephone,:datedereservation,:idforfait)";
    
    $db = config::getConnexion();
    try{
        $query=$db->prepare($sql);
        $query->execute([

        'firstname'=>$reservation->getFirstName(),
        'lastname'=>$reservation->getLastName(),
        'email'=>$reservation->getEmail(),
        'telephone'=>$reservation->getTelephone(),
        'datedereservation'=>$reservation->getDateReservation(),
        'idforfait'=>$reservation->getIdForfait(),
        
        
        ]);
        
    }
        catch(Exception $e){
            echo 'Erreur: '.$e->getMessage();
            
        }
}

function modifierReservation($id,$reservation) {
    $sql="update reservations set firstname=:firstname,lastname=:lastname,email=:email,telephone=:telephone,datedereservation=:datedereservation,idforfait=:idforfait where id=".$id;
   
    $db = config::getConnexion();
    try{
        $query = $db->prepare($sql);
    
        $query->execute([

            'firstname'=>$reservation->getFirstName(),
            'lastname'=>$reservation->getLastName(),
            'email'=>$reservation->getEmail(),
            'telephone'=>$reservation->getTelephone(),
            'datedereservation'=>$reservation->getDateReservation(),
            'idforfait'=>$reservation->getIdForfait(),
            
            
            ]);			
    }
    catch (Exception $e){
        echo 'Erreur: '.$e->getMessage();
    }		
  }
public function afficherReservationDetail(int $rech1)
    {
        $sql="select * from reservations where id=".$rech1."";
        
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    public function supprimerReservation($id)
    {
        $sql = "DELETE FROM reservations WHERE id=".$id."";
        $db = config::getConnexion();
        $query =$db->prepare($sql);
        
        try {
            $query->execute();
        }
        catch(Exception $e){
            die('Erreur: '.$e->getMessage());
    
        }
    }


    function afficherReservationTrie(string $selon){
        $sql="select * from reservations order by ".$selon."";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
    }
    
    catch(Exception $e){
        echo 'Erreur: '.$e->getMessage();
    }
    }


    public function afficherReservationRech(string $rech1,string $selon)
{
    $sql="select * from reservations where $selon like '".$rech1."%'";
    
    $db = config::getConnexion();
    try{
        $liste = $db->query($sql);
        return $liste;
    }
    catch(Exception $e){
        die('Erreur: '.$e->getMessage());
    }
}
    
}

?>