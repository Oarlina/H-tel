<h1> POO Hotel : </h1>

<?php

// autoload the class
spl_autoload_register(function ($class_name) {
    require 'classes/'.$class_name . '.php';
});

$hilton = new Hotel ("Hilton","10 rue de la Gare", "67000","Strasbourg","30");
$regent = new Hotel ("Regent","61 Rue Dauphine","75006","Paris","10");
$virgile = new Client ("Virgile", "GIBELLO");
$micka = new Client ("Micka", "MURKMANN");
$chambre16 = new Reservation ( "01-01-2021","02-02-2021","3",$micka);
$chambre3 = new Chambre ("3","120","2", "", "True",$micka,$hilton);
$chambre1 = new Chambre ("1","120","2", "", "True",$micka,$hilton);


 echo $hilton -> infoHotel().$regent -> infoHotel()."<br>"; // affiche les informations des deux hotels
echo $chambre3."<br>". $chambre1; // sa marche
// echo $hilton->getInfos();
// echo $micka->getInfos(); // afficher les réservations de Micka  mais ne marche plus
echo "<br>" . $chambre16->getInfos();
