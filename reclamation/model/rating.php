<?php
	class rating
	{  
		public $id;
		public $nom;
		public $note;
		public $idReclamation;
		
		
		function __construct($id,$nom,$note,$idReclamation)
		{
			$this->id=$id;
			$this->nom=$nom;
			$this->note=$note;
			$this->idReclamation=$idReclamation;
		
		}

		function getId(){
			return $this->id;
		}
		function getNom(){
			return $this->nom;
		}
		function getNote(){
			return $this->note;
		}
		function getIdReclamation(){
			return $this->idReclamation;
		}

		function setId($id){
			$this->id=$id;
		}
		function setNom($nom){
			$this->nom=$nom;
		}
		function setNote($note){
			$this->note=$note;
		}
		function setIdReclamation($idReclamation){
			$this->idReclamation=$idReclamation;
		}
		
		
	}

  ?>
