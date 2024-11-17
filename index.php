<h1> POO Hotel : </h1>
<style>body{background-color:black;color:white;}</style> <!-- permet d'avoir la page noir et le texte en blanc--!>

<?php

// autoload the class
spl_autoload_register(function ($class_name) {
    require 'classes/'.$class_name . '.php';
});

$hilton = new Hotel ("Hilton","10 rue de la Gare", "67000","Strasbourg","30");
$regent = new Hotel ("Regent","61 Rue Dauphine","75006","Paris","10");

$virgile = new Client ("Virgile", "GIBELLO");
$micka = new Client ("Micka", "MURKMANN");

$chambre1 = new Chambre ("1","120","2", "", "True",$hilton);
$chambre2 = new Chambre ("2","120","2", "", "True",$hilton);
$chambre3 = new Chambre ("3","120","2", "", "True",$hilton);
$chambre4 = new Chambre ("4","120","2", "", "True",$hilton);

$Rchambre1 = new Reservation ( "01-01-2021","02-02-2021",$chambre1,$micka,$hilton);
$Rchambre2 = new Reservation ( "01-03-2021","02-04-2021",$chambre2,$micka,$hilton);
$Rchambre3 = new Reservation ( "01-04-2021","02-07-2021",$chambre3,$micka,$hilton);




 echo $hilton -> infoHotel().$regent -> infoHotel()."<br>"; // affiche les informations des deux hotels

echo "<br>".$hilton->InfosHotel(); // affiche les reservations de l'hotel hilton
echo "<br>".$regent->InfosHotel(); // affiche les reservations de l'hotel regent
echo "<br>".$micka->getInfoClient();

// echo "<br>" . $chambre16->getInfos();
