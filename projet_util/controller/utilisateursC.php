<?php
include_once 'C:\xampp\htdocs\projet_util (1)\projet_util\config.php';
include_once 'C:\xampp\htdocs\projet_util (1)\projet_util\model\utilisateur.php';
class utilisateurc{
    function triPrix()
		{
			$db = config::getConnexion();
			$sql = "SELECT * FROM utilisateurs ORDER BY idUtilisateur ASC";
			
			try{
				$listeevenement = $db->query($sql);
				return $listeevenement;
			}
			   catch (Exception $e)
			   {
				   die('Erreur:'.$e->getMessage());
			   }
		
		}
		
	
		 function triPrixDesc()
		{
			$db = config::getConnexion();
			$sql = "SELECT * FROM utilisateurs  ORDER BY idUtilisateur DESC";
			try{
				$listeevenement = $db->query($sql);
				return $listeevenement;
			}
			   catch (Exception $e)
			   {
				   die('Erreur:'.$e->getMessage());
			   }
            }
    function recupererutilisateur(){
        $sql="SELECT * FROM utilisateurs";
        $db = config::getConnexion();
        try{
            $listeutilisateurs = $db->query($sql);
            return $listeutilisateurs;
        }
        catch(Exception $e){
            die('Erreur:'. $e->getMessage());
    }
    
}
function ajouterutilisateur($utilisateur){
    $sql="INSERT INTO utilisateurs (nomUtilisateur,prenomUtilisateur,mdpUtilisateur,Email,username) 
    VALUES (:nomUtilisateur,:prenomUtilisateur,:mdpUtilisateur,:Email,:username)";
    $db = config::getConnexion();
    try{
        $query = $db->prepare($sql);
        $query->execute([
            'nomUtilisateur' => $utilisateur->getNom(),
            'prenomUtilisateur' => $utilisateur->getPrenom(),
            'mdpUtilisateur' => $utilisateur->getmdp(), 
            'Email' => $utilisateur->getEmail(),
            'username' => $utilisateur->getUsername()
        ]);			
    }
    catch (Exception $e){
        echo 'Erreur: '.$e->getMessage();
    }			
}
function supprimerutilisateur($idUtilisateur){
    $sql = "DELETE FROM utilisateurs WHERE idUtilisateur=".$idUtilisateur."";
    $db = config::getConnexion();
    $query =$db->prepare($sql);
    
    try {
        $query->execute();
    }
    catch(Exception $e){
        die('Erreur: '.$e->getMessage());

    }
}
function recupererutilisateurinfo($idUtilisateur){
    $sql="SELECT * from utilisateurs where
    idUtilisateur=$idUtilisateur";
    $db=config::getConnexion();
    try{
        $query=$db->prepare($sql);
        $query->execute();
        $commande=$query->fetch();
        return $commande;
    
    }
    catch(Exception $e)
    {die ('Erreur:'.$e->getMessage());
    }
}
function modifierutilisateur($utilisateur, $idUtilisateur){
    try {
        $db = config::getConnexion();
        $query = $db->prepare(
            'UPDATE utilisateurs SET 
                nomUtilisateur= :nomUtilisateur, 
                prenomUtilisateur= :prenomUtilisateur, 
                mdpUtilisateur= :mdpUtilisateur, 
                Email= :Email,
                username= :username
            WHERE idUtilisateur= :idUtilisateur'
        );
        $query->execute([
            'nomUtilisateur' => $utilisateur->getNom(),
            'prenomUtilisateur' => $utilisateur->getPrenom(),
            'mdpUtilisateur' => $utilisateur->getmdp(),
            'Email' => $utilisateur->getEmail(),
            'username' => $utilisateur->getUsername(),
            'idUtilisateur' => $idUtilisateur
            
        ]);
        echo $query->rowCount() . " records UPDATED successfully <br>";
    } catch (PDOException $e) {
        $e->getMessage();
    }
}
function desactivate($idUtilisateur){
    $db = config::getConnexion();
    $sql = "UPDATE utilisateurs SET etat=0 WHERE idUtilisateur=$idUtilisateur";
    $stmt = $db->prepare($sql);
    $stmt->execute();
}
function activate($idUtilisateur){
    $db = config::getConnexion();
    $sql = "UPDATE utilisateurs SET etat=1 WHERE idUtilisateur=$idUtilisateur";
    $stmt = $db->prepare($sql);
    $stmt->execute();
}
function recupererdernierutilisateur(){
    $sql="SELECT * FROM utilisateurs WHERE idUtilisateur=(SELECT max(idUtilisateur) FROM utilisateurs)";
    $db = config::getConnexion();
    try{
        $query = $db->prepare($sql);
        $query->execute();
        $dernierutilisateurs=$query->fetch();
        return $dernierutilisateurs;
    }
    catch(Exception $e){
        die('Erreur:'. $e->getMessage());
}
}
function ajouterjoueur($id){
    $sql="INSERT INTO joueur (idJoueur) VALUES ($id)";
    $db = config::getConnexion();
    try{
        $query = $db->prepare($sql);
        $query->execute();			
    }
    catch (Exception $e){
        echo 'Erreur: '.$e->getMessage();
    }			
}
function modifierimage($photo,$id)
{
    $sql="UPDATE utilisateurs SET photo=:photo WHERE idUtilisateur=$id";
    $db = config::getConnexion();
    try{
        $query = $db->prepare($sql);
        $query->execute([
            'photo'=>$photo
        ]);			
    }
    catch (Exception $e){
        echo 'Erreur: '.$e->getMessage();
    }			

}
}
?>