<?php

class Client
{
    private string $prenom;
    private string $nom;
    private array $reserves;

    public function __construct (string $prenom, string $nom)
    {
        $this-> prenom = $prenom;
        $this-> nom = $nom;
        $this-> reserves = [];
    }

    // getter et setter de prenom
    public function getPrenom()
    {
        return $this->prenom;
    }
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
        
        return $this;
    }
    // getter et setter de nom
    public function getNom()
    {
        return $this->nom;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;
        
        return $this;
    }
    // getter et setter des reserves
    public function getReserves()
    {
        return $this->reserves;
    } public function setReserves($reserves)
    {
        $this->reserves = $reserves;
    
        return $this;
    }
    public function addReserve(Reservation $reserve) // fait le tableau des reserve 
    {
        $this -> reserves[] = $reserve;
    }

    public function getInfos() // montre toutes les réservations du client
    {
        $result = "<h3>Réservation de $this</h3>";
        foreach($this->reserves as $reserve)
        {
            $result .= $this . " || ". $reserve->getInfos(). "<br>";
        }
        return $result;
    }

    public function __toString()
    {
        return $this->prenom. " ". $this->nom;
    }

}