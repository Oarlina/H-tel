<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/19a031a4c5.js" crossorigin="anonymous"></script>
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
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

        $chambre1 = new Chambre ("1","120","2", True, "", $hilton);
        $chambre2 = new Chambre ("2","120","2", True, "", $hilton);
        $chambre3 = new Chambre ("3","120","2", False, "", $hilton);
        $chambre4 = new Chambre ("4","120","2", True, "", $hilton);
        $chambre5 = new Chambre ("5","120","2", True, "", $hilton);
        $chambre6 = new Chambre ("6","120","2", False, "", $hilton);
        $chambre7 = new Chambre ("7","120","2", True, "", $hilton);
        $chambre8 = new Chambre ("8","200","3", True, "", $hilton);
        $chambre9 = new Chambre ("9","200","3", False, "", $hilton);
        $chambre10 = new Chambre ("10","200","3", True, "", $hilton);
        $chambre11 = new Chambre ("11","120","2", True, "", $hilton);
        $chambre12 = new Chambre ("12","120","2", False, "", $hilton);
        $chambre13 = new Chambre ("13","300","5", True, "", $hilton);
        $chambre14 = new Chambre ("14","300","5", True, "", $hilton);
        $chambre15 = new Chambre ("15","300","5", True, "", $hilton);
        $chambre16 = new Chambre ("16","300","5", True, "", $hilton);
        $chambre17 = new Chambre ("17","300","5", True, "", $hilton);

        $Rchambre17 = new Reservation ( "01-01-2021","15-01-2021",$chambre17,$virgile,$hilton);
        $Rchambre3 = new Reservation ( "11-03-2021","15-03-2021",$chambre3,$micka,$hilton);
        $Rchambre4 = new Reservation ( "01-04-2021","17-04-2021",$chambre4,$micka,$hilton);

        // affiche les informations des deux hotels
        echo $hilton -> infoHotel()."<br>";
        echo $regent -> infoHotel()."<br>"; 


        // afficher les réservations des hotels
         echo $hilton->reservationsHotel()."<br>"; 
         echo $regent->reservationsHotel()."<br>"; 

        // // affiche les réservations des clients
        echo $virgile->reservationsClient();
        echo $micka->reservationsClient();


        //affiche les chambres de l'hôtel
        echo $hilton->afficherChambres();
    ?>
</body>
</html>