<?php

class Client
{
    private string $prenom;
    private string $nom;
    private array $reservations;
    // private float $prix;


    public function __construct (string $prenom, string $nom){
        $this-> prenom = $prenom;
        $this-> nom = $nom;
        $this->reservations =[];
        // $this ->prix = 0;
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


    public function reservationsClient ()
    {
        $result ="<h2> Réservations de $this: </h2>";
        foreach ($this->reservations as $reservation)
        {
            
            $result .= $reservation->infosClient()."<br>";
            // $prix += $reservation->chambre->getPrix();
        }
        // $result .= ">Total: ".$prix." €";
        return $result;
    }
    public function __toString()
    {
        return $this->prenom. " ". $this->nom;
    }

    /**
     * Get the value of prix
     */ 
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set the value of prix
     *
     * @return  self
     */ 
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }
}