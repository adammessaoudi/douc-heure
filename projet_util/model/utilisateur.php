<?php

class utilisateur{
    private string $nom;
    private string $prenom;
    private string $email;
    private string $mdp;   
    private string $username;
    private $id=null;
    private $etat=null;
    private $date=null;
    function __construct($nom, $prenom, $mdp, $email, $username){
		$this->nom=$nom;
		$this->prenom=$prenom;
        $this->mdp=$mdp;
        $this->email=$email;
        $this->username=$username;
            }
function getEmail(){
    return $this->email;
}
function getmdp(){
    return $this->mdp;
}
function getPrenom(){
    return $this->prenom;
}
function getNom(){
    return $this->nom;
}
function getId(){
    return $this->id;
}
function getEtat(){
    return $this->etat;
}
function getUsername(){
    return $this->username;
}

function getDate(){
    return $this->date;
}
}
?>