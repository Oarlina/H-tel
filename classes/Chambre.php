
<?php

class Chambre
{
    private string $numero;
    private float $prix;
    private int $nbLits;
    private bool $wifi;
    private bool $disponible;
    private Hotel $hotel; // pour que la class Hotel peut avoir les données
    private array $clients;
    private array $reservations; // il a accès a un tableau de reservations
    public function __construct (string $numero, float $prix, int $nbLits, bool $wifi, bool $disponible, Hotel $hotel)
    {
        $this-> numero = $numero;
        $this-> prix = $prix;
        $this-> nbLits = $nbLits;
        $this-> wifi = $wifi;
        $this-> disponible = $disponible;
        $this-> hotel = $hotel;
        $hotel-> addChambre($this);
        $this-> reservations = [];
        $this-> clients = [];
    }

    // getter et setter du numéro
    public function getNumero(){
        return $this->numero;
    } public function setNumero($numero){
        $this->numero = $numero;
        return $this;
    }
    // getter et setter du prix
    public function getPrix(){
        return $this->prix;
    } public function setPrix($prix){
        $this->prix = $prix;
        return $this;
    }
    // getter et setter du nombre de lits
    public function getNbLits(){
        return $this->nbLits;
    } public function setNbLits($nbLits){
        $this->nbLits = $nbLits;
        return $this;
    }
    // getter et setter de la wifi
    public function getWifi(){
        return $this->wifi;
    } public function setWifi($wifi){
        $this->wifi = $wifi;
        return $this;
    }
    // getter et setter de la disponibilité
    public function getDisponible(){
        return $this->disponible;
    } public function setDisponible($disponible){
        $this->disponible = $disponible;
        return $this;
    }
    // getter et setter hotel
    public function getHotel(){
        return $this->hotel;
    } public function setHotel($hotel){
        $this->hotel = $hotel;
        return $this;
    }
    // getter et setter de client
    public function getClients(): array{
        return $this->clients;
    }public function setClients(array $clients): self{
        $this->clients = $clients;
        return $this;
    }
    // getter et setter de reservations
    public function getReservations(): array{
        return $this->reservations;
    }  public function setReservations(array $reservations): self{
        $this->reservations = $reservations;
        return $this;
    }
    
    
    public function addReservation(Reservation $reservation){
        $this->reservations[] = $reservation;
    }
    public function addClient(Client $client){
        $this->clients[] = $client;
    }
    

    
    
    public function InfosChambreReserver()
    {
        $result =  " ";
        foreach ($this->reservations as $this->reservation)
        {
            $result .=  $this->reservation->getClient()." ".$this ." || ". $this->reservation."<br>";
        }
        return  $result ;
    }
    
    public function infoClient ()
    {
        $result = "";
        if ($this->reservations == null)
        {
            $result .= "Aucune réservation ! <br>";
        }else
        {
            $result .= "<b>Hotel: ". $this->hotel. "</b> || ".$this->getInfos() ." || ";
        }
        return $result;
    }
    public function etatWifi ()
    {
        if ($this->wifi == True)
        {
            $valeur = "Oui";
        }else 
        {
            $valeur = "Non";
        }
        return $valeur;
    }
    public function iconWifi()
    {
        if ($this->wifi == True)
        {
            return "<i class='fa-solid fa-wifi'></i>";
        }
    }

    public function etatChambre ()
    {
        if ($this->reservations == True) // si une chambre est réserver alors elle renvoie Réservé sinon Disponilbe
        {
            return "<p class='reserve'>Réservé</p>";
        }else
        {
            return "<p class='disponible'>Disponible</p>";
        }
    }
    
    public function getInfos()
    {
        return $this . " (". $this->nbLits . " lits - ".$this->prix. " € - Wifi: ".$this->etatWifi(). ") ";
    }
    
    public function __toString()
    {
        return "Chambre: ". $this->numero;
    }
}