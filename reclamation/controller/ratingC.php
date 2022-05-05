<?php


  class config {
    private static $pdo = NULL;   

    public static function getConnexion() {
      if (!isset(self::$pdo)) {
        try{
          self::$pdo = new PDO('mysql:host=localhost;dbname=reclamation', 'root', '', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
          
        }catch(Exception $e){
          die('Erreur: '.$e->getMessage());
        }
      }
      return self::$pdo;
    }   
  }

	class ratingC
	{
		
		function ajouter($rating){
			$db = config::getConnexion();
			$sql = "INSERT INTO rating (?,?,?,?) VALUES (:id,:nom,:note,:idReclamation)";
			try {
				$req = $db->prepare($sql);
			$req->bindValue(':id',$rating->getId());
            $req->bindValue(':nom',$rating->getNom());
            $req->bindValue(':note',$rating->getNote());
            $req->bindValue(':idReclamation',$rating->getIdReclamation());
			
	
			$req->execute();
		}
		catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			

		}
		function afficherrating(){
			$db = config::getConnexion();
			$sql="SELECT * FROM rating ";
			$liste=$db->query($sql);
			return $liste;
			
		}

		function modifierrating($rating,$id){
			$db = config::getConnexion();
			
			$sql="UPDATE rating SET nom=:nom,note=:note,idReclamation=:idReclamation WHERE id=:id";
			try{
				$req=$db->prepare($sql);
				
            $req->bindValue(':nom',$rating->getNom());
            $req->bindValue(':note',$rating->getNote());
            $req->bindValue(':idReclamation',$rating->getIdReclamation());

				$req->bindValue(':id',$id);
				$s=$req->execute();
			}
			catch(Exception $e){
				echo("Erreur".$e->getMessage());
			}

		}
		
		function supprimerrating($id){
			$db = config::getConnexion();
			$sql="DELETE FROM rating where id= :id";
			$req=$db->prepare($sql);
			$req->bindValue(':id',$id);
	        $req->execute();
	        
		}

		function reccupererrating($id){
			$db = config::getConnexion();
			$sql="SELECT * from rating where id=$id";
			$liste=$db->query($sql);
			return $liste;
		}

	
		
		
	}

  ?>