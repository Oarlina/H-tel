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
    public function getNom()
    {
        return $this->nom;
    } public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }
    // getter et setter d'adresse
    public function getAdresse()
    {
        return $this->adresse;
    } public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }
    // getter et setter du code postale
    public function getCodePostal()
    {
        return $this->codePostal;
    } public function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;

        return $this;
    }
    // getter et setter de la ville
    public function getVille()
    {
        return $this->ville;
    } public function setVille($ville)
    {
        $this->ville = $ville;
        return $this;
    }
    // getter et setter du tableau des chambres
    public function getChambres()
    {
        return $this->chambres;
    } public function setChambres($chambres)
    {
        $this->chambres = $chambres;
        return $this;
    }

    public function addReserve(Reservation $reserve) // fait le tableau des reserve 
    {
        $this -> reserves[] = $reserve;
    }

    // public function getInfos() // montre toutes les réservations du client
    // {
    //     $result = "<h3>Réservation de $this</h3>";
    //     foreach($this->reserves as $reserve)
    //     {
    //         $result .= $reserve->getClient();
    //     }
    //     return $result;
    // }



    public function infoHotel()
    {
        $result = "<h3>".$this."</h3>";
        $result .= $this->adresse. " ". $this->codePostal. " ". $this->ville. "<br>Nombre de chambre: <br>Nombre de chambres réservées: ";
        $result .= "<br>Nombre de chambres dispo: "."<br>";
        return $result;
    }

    public function __toString()
    {
        return $this->nom. " **** ". $this->ville;
    }


}