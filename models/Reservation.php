<?php
class Reservation{
    private const id = null;
    private const firstname = null;
    private const lastname = null;
    private const email = null;
    private const telephone = null;
    private const datedereservation = null;
    private const idforfait = null;


    function __construct(string $firstname,string $lastname,string $email,string $telephone, string $datedereservation, int $idforfait)
    {
        
        $this->firstname=$firstname;
        $this->lastname=$lastname;
        $this->email=$email;
        $this->telephone=$telephone;
        $this->datedereservation=$datedereservation;
        $this->idforfait=$idforfait;
    }
    function getId(): int{
        return $this->id;
    }
    function getFirstName(): string{
        return $this->firstname;
    }
   
    function getLastName(): string{
        return $this->lastname;
    }
    function getEmail(): string{
        return $this->email;
    }
    
    function getTelephone(): string{
        return $this->telephone;
    }

    function getDateReservation(): string{
        return $this->datedereservation;
    }

    function getIdForfait(): int{
        return $this->idforfait;
    }
  
    function setFirstBame(string $firstname): void{
        $this->firstname=$firstname;
    }
    
    function setLastName(string $lastname): void{
        $this->lastname=$lastname;
    }

    function setEmail(string $email): void{
        $this->email=$email;
    }

    function setTelephone(string $telephone): void{
        $this->telephone=$telephone;
    }

    function setDateReservation(string $datedereservation): void{
        $this->datedereservation=$datedereservation;
    }

    function setidforfait(int $idforfait): void{
        $this->idforfait=$idforfait;
    }
   
}
?>