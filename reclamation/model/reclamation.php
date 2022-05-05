<?php
	class advert
	{  
		public $id;
		public $nom;
		public $description;
		public $email;
		
		
		function __construct($id,$nom,$description,$email)
		{
			$this->id=$id;
			$this->nom=$nom;
			$this->description=$description;
			$this->email=$email;
			
			
		}

		function getId(){
			return $this->id;
		}
		function getNom(){
			return $this->nom;
		}
		function getDescription(){
			return $this->description;
		}
		function getEmail(){
			return $this->email;
		}
	
		

		function setId($id){
			$this->id=$id;
		}
		function setNom($nom){
			$this->nom=$nom;
		}
		function setDescription($description){
			$this->description=$description;
		}
		function setEmail($email){
			$this->email=$email;
		}
		
		
	}

  ?>
