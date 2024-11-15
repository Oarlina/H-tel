<?php

class Reservation 
{
    // objet Chambre
    //objet client
    private DateTime $debutReservation;
    private DateTime $finReservation;
    private Client $reserve; // pour premettre a la class client d'accéder au infos d'ici
    
    

    public function __construct( int $numChambre,
            string $debutReservation, string $finReservation, Client $reserve)
    {
        $this-> numChambre = $numChambre;
        $this-> debutReservation =new DateTime($debutReservation); 
        $this-> finReservation = new DateTime($finReservation);
        $this-> reserve = $reserve;
        $reserve -> addReserve($this);
    }
    
    // getter et setter du numero de la chambre
    public function getNumChambre()
    {
        return $this->numChambre;
    }
    public function setNumChambre($numChambre)
    {
        $this->numChambre = $numChambre;

        return $this;
    }
    // getter et setter du debut de la reservation
    public function getDebutReservation()
    {
        return $this->debutReservation;
    }
    public function setDebutReservation($debutReservation)
    {
        $this->debutReservation = $debutReservation;

        return $this;
    }
    // getter et setter de la fin de la reservation
    public function getFinReservation()
    {
        return $this->finReservation;
    }
    public function setFinReservation($finReservation)
    {
        $this->finReservation = $finReservation;
        
        return $this;
    }
    // getter et setter des reserve
    public function getReserve()
    {
        return $this->reserve;
    }
    public function setReserve($reserve)
    {
        $this->reserve = $reserve;
        return $this;
    }
    
    public function getInfos()
    {
        return $this." || du ". $this->debutReservation->format("d/m/Y"). " au ". $this->finReservation->format("d/m/Y");
    }
    public function __toString()
    {
        return "Chambre ". $this->numChambre;
    }

}