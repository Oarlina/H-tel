
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
        $prix=0;
        $result2="";
        $nb=0;
        foreach($this->reservations as $reservation) // pour regarder toutes les chambres de chambres
        {
            $result2 .= $reservation->infosClient();
            $prix += $reservation->prixTotal();
            $nb++;
        }
        if ($nb == 0) 
            {
                $result2 = "Aucune réservations ! <br>";
            }
        else 
        {
            $result .= "<p>".$nb." réservations<br></p>";
        }
        
        $result2 .= "Total: ".$prix." €";
        return $result.$result2."<br><br> ";
    }
    public function __toString()
    {
        return $this->prenom. " ". $this->nom;
    }
}