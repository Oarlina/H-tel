<?php

class Reservation 
{
    private DateTime $debutReservation;
    private DateTime $finReservation;
    private Chambre $chambre; // pour permettre a la class Chambre d'accéder au infos d'ici
    private Client $client; // pour permettre a la class Client d'accéder aux infos ici
  

    public function __construct(string $debutReservation, string $finReservation, Chambre $chambre, Client $client,Hotel $hotel)
    {
        $this-> debutReservation =new DateTime($debutReservation); 
        $this-> finReservation = new DateTime($finReservation);
        $this -> chambre= $chambre;
        $chambre ->addReservation($this);
        $this -> client= $client;
        $client ->addReservation($this);
    }
    // getter et setter du debut de la reservation
    public function getDebutReservation()
    {
        return $this->debutReservation;
    } public function setDebutReservation($debutReservation)
    {
        $this->debutReservation = $debutReservation;
        return $this;
    }
    // getter et setter de la fin de la reservation
    public function getFinReservation()
    {
        return $this->finReservation;
    } public function setFinReservation($finReservation)
    {
        $this->finReservation = $finReservation;
        return $this;
    } 
    //getter et setter de chambre
    public function getChambre()
    {
        return $this->chambre;
    } public function setChambre($chambre)
    {
        $this->chambre = $chambre;
        return $this;
    }
    // getter et setter de client
    public function getClient()
    {
        return $this->client;
    } public function setClient($client)
    {
        $this->client = $client;
        return $this;
    }

    public function prixTotal ()
    {
        $total=0;
        $debut= $this->debutReservation;
        $fin = $this->finReservation;
        $nbJour= $debut->diff($fin);
        $nbJour = $nbJour->format ('%R%a');
        $total += $nbJour * ($this->chambre->getPrix());
        return $total;
    }

    public function infosClient() 
    {
        $result ="";
        $result = $this->chambre->infoClient().$this."<br>";
        return $result;
    }
    
    public function __toString()
    {
        return "du ". $this->debutReservation->format("d/m/Y"). " au ". $this->finReservation->format("d/m/Y");
    }
}