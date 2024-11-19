
<?php

class Hotel 
{
    private string $nom;
    private string $adresse;
    private string $codePostal;
    private string $ville;
    private array $chambres; 
    public function __construct(string $nom, string $adresse,
            string $codePostal, string $ville)
    {
        $this-> nom = $nom;
        $this-> adresse = $adresse;
        $this-> codePostal = $codePostal;
        $this-> ville = $ville;
        $this-> chambres = [];
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
    public function getReservations(): array{
        return $this->reservations;
    }  public function setReservations(array $reservations): self{
        $this->reservations = $reservation;
        return $this;
    }


    public function addChambre(Chambre $chambre) // fait le tableau des chambres 
    {
        $this -> chambres[] = $chambre;
    }


    public function reservationsHotel() 
    {    
        $result = "<h2>Réservations de l'hôtel ".$this.": </h2>";
        $result2= "";
        $nb=0;
        foreach($this->chambres as $this->chambre) // pour regarder toutes les chambres de chambres
        {
            foreach ($this->chambre->getReservations() as $reservation) // pour trouver le nombre de chambre qui ont une réservation et récupérer ces informations
            {
                $result2 .=  $this->chambre->InfosChambreReserver();
                $nb++;
            }
        }
        // si je n'ai aucune reservation alors j'ajoute a result2 sinon j'ajoute a result
        if ($nb == 0) 
            {
                $result2 = "Aucune réservations ! <br>";
            }
        else 
        {
            $result .= "<p>".$nb." réservations<br></p>";
        }
        return $result.$result2;
    }
    
    public function nbChambre() // pour afficher le nombre de chambre dont les reserver et disponible
    {
        $nb= 0;
        foreach($this->chambres as $chambre)
        {
           foreach($chambre->getReservations() as $reservation) // calcule le nombre de reservations dans les chambres
           {
                $nb++;
           }
        }
        return "Nombre de chambre: ".count($this->chambres)."<br> Nombre de chambres reservées: ".$nb."<br> Nombre de chambres disponible ".(count($this->chambres) - $nb)."<br>";
        
    }

    public function infoHotel()
    {
        $result = "<h2>".$this."</h2>";
        $result .= $this->adresse. ", ". $this->codePostal. ", ". $this->ville. "<br>".$this->nbChambre();
        return $result;
    }

    public function afficherChambres()
    {
        ksort($this->chambres);
        $result = "<h2>Statues des chambres de <b>$this:</b></h2><br><table> 
                        <thead> 
                            <tr>
                           
                                <th> CHAMBRES </th>
                                <th> PRIX </th>
                                <th> WIFI </th>
                                <th> ETAT </th>
                            
                            </tr>
                        </thead>
                        <tbody>";
        foreach ($this->chambres as $chambre)
        {
            $result .="<tr>
                        <td>Chambre n° ". $chambre->getNumero()."</th>
                        <td> ".$chambre->getPrix() ." €</td>
                        <td> ".$chambre->iconWifi() ." </td>
                        <td> ".$chambre->etatChambre() ." </td>
                    </tr>";
        }


        $result .= "</tbody> </thead>";
        return $result;
    }

    public function __toString()
    {
        return $this->nom. " **** ". $this->ville;
    }


}