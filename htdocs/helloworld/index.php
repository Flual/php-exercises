<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="style.css" type="text/css" rel="stylesheet" >
</head>
<body>
    <?php include "menu.php"; ?>
    <?php
        /*
         * Kommentar mehrere Zeilen
         */

        $ausgabe = "Hello world!";
        $anzahl = 21; // 5 Tickets

        //Preis pro Ticket
        $preis = 2.9;

        $betrag = $anzahl * $preis;

        //Ausgabe mit mehreren Befehlen/Anweisungen
        echo "<h1>";
        echo $ausgabe;
        echo "</h1>";

        //Ausgabe mit einer Anweisung
        echo "<h1 class='' id=''>" . $ausgabe . "</h1>";

        echo "<p>";
        //echo $betrag;
        echo number_format($betrag, 2, ",", ".");
        echo " €";
        echo "</p>";

        //Alles über 12 € ist teuer, sonst kommt nichts.
        if ($betrag > 12) {
            echo "<p>";
            echo "teuer";
            echo "</p>";
            //echo "<p>teuer</p>";
        }
        
        //Pärchen-Rabatt bei 2 oder mehr Tickets von 3 €
        //wenn 1 Ticket, dann Single-Aufschlag von 50 Cent.
        echo "<div>";
        if ($anzahl >= 2) {
            echo "3 € Rabatt!";
        }
        else {
            echo "0,50 € Aufschlag!";
        }
        echo "</div>";

        //Ausgabe der Tickets
        /* 1. Ticket um 2.9 €<br>
         * 2. Ticket um 2.9 €<br>
         * ...
         */
        //Summe bilden
        //1. Variable für die Summe mit 0 initialisieren
        $summe = 0;
        for ($i=1; $i<=$anzahl; $i++){
            echo $i . ". Ticket um " . number_format($preis, 2, ",", ".") . " €<br>";
            //2. In der Schleife die Summe erhöhen
            $summe = $summe + $preis;
            //$summe++; Warum ist das falsch? Zählt 1 dazu.
            //$summe++$preis <-- gibt es nicht!
            //$summe += $preis;
        }
        echo "<p>Gesamtbetrag: <strong>" . number_format($summe, 2, ",", ".") . "</strong></p>";

        //Das selbe als while-Schleife
        $summe = 0;
        $ticket = 1; //mit Startwert initialisieren
        while ($ticket<=$anzahl) {
            echo $ticket . ". Ticket um " . number_format($preis, 2, ",", ".") . " €<br>";
            $summe = $summe + $preis;
            $ticket++; //kurz für: $ticket = $ticket + 1; 
        }
        echo "<p>Gesamtbetrag: <strong>" . number_format($summe, 2, ",", ".") . "</strong></p>";

    ?>
</body>
</html>