<style>
    p{border: 1px white solid; background-color:green; width:7em;text-align:center;}
</style>
<?php

class Hotel 
{
    private string $nom;
    private string $adresse;
    private string $codePostal;
    private string $ville;
    private array $chambres; 
    private array $reservationsH;
    public function __construct(string $nom, string $adresse,
            string $codePostal, string $ville)
    {
        $this-> nom = $nom;
        $this-> adresse = $adresse;
        $this-> codePostal = $codePostal;
        $this-> ville = $ville;
        $this-> chambres = [];
        $this-> reservationsH = [];
    }
    // getter et setter de nom
    public function getNom(){
        return $this->nom;
    } public function setNom($nom){
        $this->nom = $nom;
        return $this;
    }
    // getter et setter d'adresse
    public function getAdresse(){
        return $this->adresse;
    } public function setAdresse($adresse){
        $this->adresse = $adresse;
        return $this;
    }
    // getter et setter du code postale
    public function getCodePostal(){
        return $this->codePostal;
    } public function setCodePostal($codePostal){
        $this->codePostal = $codePostal;
        return $this;
    }
    // getter et setter de la ville
    public function getVille(){
        return $this->ville;
    } public function setVille($ville){
        $this->ville = $ville;
        return $this;
    }
    // getter et setter du tableau des chambres
    public function getChambres(){
        return $this->chambres;
    } public function setChambres($chambres){
        $this->chambres = $chambres;
        return $this;
    }
    // getter et setter de reservations
    public function getReservationsH(): array{
        return $this->reservationsH;
    }  public function setReservationsH(array $reservationsH): self{
        $this->reservationsH = $reservationH;
        return $this;
    }


    public function addReservationH(Reservation $reservationH)
    {
        $this->reservationsH[] = $reservationH;
    }
    public function addChambre(Chambre $chambre) // fait le tableau des chambres 
    {
        $this -> chambres[] = $chambre;
    }


    public function InfosHotel() // probleme il n'affiche que la derniere chambre reserver
    {
        $result = "<h3>Réservations de l'hôtel ".$this.": </h3>";
        if ($this->reservationsH==null)
        {
            $result .= "Aucune réservation ! <br>";
        }else
        {
            $result .= "<p>".count($this->reservationsH)." réservations<br></p>";
            foreach($this->chambres as $this->chambre)
            {
                $result .=  $this->chambre->InfosChambreReserver();
            }
        }return $result;
    }
    

    public function infoHotel()
    {
        $result = "<h3>".$this."</h3>";
        $result .= $this->adresse. ", ". $this->codePostal. ", ". $this->ville. "<br>Nombre de chambre: ".count($this->chambres)." <br>Nombre de chambres réservées: ".count($this->reservationsH)." ";
        $result .= "<br>Nombre de chambres dispo: ".count($this->chambres)-count($this->reservationsH);
        return $result;
    }

    public function __toString()
    {
        return $this->nom. " **** ". $this->ville;
    }


}