<?php

class Client
{
    private string $prenom;
    private string $nom;
    private array $reservations;

    public function __construct (string $prenom, string $nom){
        $this-> prenom = $prenom;
        $this-> nom = $nom;
        $this->reservations =[];
    }
    // getter et setter de prenom
    public function getPrenom(){
        return $this->prenom;
    }
    public function setPrenom($prenom){
        $this->prenom = $prenom;
        return $this;
    }
    // getter et setter de nom
    public function getNom(){
        return $this->nom;
    }
    public function setNom($nom){
        $this->nom = $nom; 
        return $this;
    }
    // getter et setter des reservations
    public function getReservations(){
        return $this->reservations;
    } public function setReservations($reservations){
        $this->reservations = $reservations;
        return $this;
    }
    public function addReservation(Reservation $reservation){
        $this->reservations[] = $reservation;
    }
    // public function getInfoClient()
    // {
    //     $result = "<h3>Réservations de ".$this." </h3>";
    //     if ($this->reservations==null)
    //     {
    //         $result .= "Aucune réservations<br>";
    //     }else
    //     {
    //         foreach ($this->reservations as $this->reservation)
    //         {
    //             $result .=  $this->reservations->hotel . " (". $this->nbLits . " lits - ".$this->prix. " € - Wifi: ".$this->wifi. ") || ". $this->reservation."<br>";
    //         }
    //     }
    //     return $result;
    // }


    public function __toString()
    {
        return $this->prenom. " ". $this->nom;
    }

    
}