<?php

class Chambre
{
    private int $numero;
    private float $prix;
    private int $nbLits;
    private bool $wifi;
    private bool $disponible;
    //objet Hotel
    //tableau de reservations 


    public function __construct (int $numero, float $prix, int $nbLits, string $wifi, bool $disponible)
    {
        $this-> numero = $numero;
        $this-> prix = $prix;
        $this-> nbLits = $nbLits;
        $this-> wifi = $wifi;
        $this->wifi = false;
        $this-> disponible = $disponible;
        $this->disponible = true;
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





    public function __toString()
    {
        return "Chambre: ". $this->numero. " (". $this->nbLits . " lits - ".$this->prix. " € - Wifi: ".$this->wifi. ") ";
    }
}