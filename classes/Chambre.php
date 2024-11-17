<?php

class Chambre
{
    private string $numero;
    private float $prix;
    private int $nbLits;
    private bool $wifi;
    private bool $disponible;
    private array $reservations; // il a accès a un tableau de reservations
    private Hotel $hotel; // pour que la class Hotel peut avoir les données
 

    public function __construct (string $numero, float $prix, int $nbLits, string $wifi, bool $disponible, Hotel $hotel)
    {
        $this-> numero = $numero;
        $this-> prix = $prix;
        $this-> nbLits = $nbLits;
        $this-> wifi = $wifi;
        $this-> disponible = $disponible;
        $this-> hotel = $hotel;
        $hotel-> addChambre($this);
        $this-> reservations = [];
    }

    // getter et setter du numéro
    public function getNumero()
    {
        return $this->numero;
    } public function setNumero($numero)
    {
        $this->numero = $numero;
        return $this;
    }
    // getter et setter du prix
    public function getPrix()
    {
        return $this->prix;
    } public function setPrix($prix)
    {
        $this->prix = $prix;
        return $this;
    }
    // getter et setter du nombre de lits
    public function getNbLits()
    {
        return $this->nbLits;
    } public function setNbLits($nbLits)
    {
        $this->nbLits = $nbLits;
        return $this;
    }
    // getter et setter de la wifi
    public function getWifi()
    {
        return $this->wifi;
    } public function setWifi($wifi)
    {
        $this->wifi = $wifi;
        return $this;
    }
    // getter et setter de la disponibilité
    public function getDisponible()
    {
        return $this->disponible;
    } public function setDisponible($disponible)
    {
        $this->disponible = $disponible;
        return $this;
    }
    // getter et setter hotel
    public function getHotel()
    {
        return $this->hotel;
    } public function setHotel($hotel)
    {
        $this->hotel = $hotel;
        return $this;
    }
    // getter et setter de reservations
    public function getReservations(): array
    {
        return $this->reservations;
    }  public function setReservations(array $reservations): self
    {
        $this->reservations = $reservations;
        return $this;
    }



    public function addReservation(Reservation $reservation)
    {
        $this->reservations[] = $reservation;
    }
    
    

    public function getInfos()
    {
        return $this . " (". $this->nbLits . " lits - ".$this->prix. " € - Wifi: ".$this->wifi. ") ";
    }
    
    public function getInfoClient()
    {
        $result = "<h3>Réservations de ".$reservation." </h3>";
        foreach ($this->reservations as $this->reservation)
        {
            $result .=  $this . " (". $this->nbLits . " lits - ".$this->prix. " € - Wifi: ".$this->wifi. ") || ". $this->reservation."<br>";
        }
        return $result;
    }
    public function InfosChambreReserver()
    {
        $result = "";
        foreach ($this->reservations as $this->reservation)
        {
            $result .=  $this ." || ". $this->reservation."<br>";
        }
        return  $result ;
    }

    public function __toString()
    {
        return "Chambre: ". $this->numero;
    }
}