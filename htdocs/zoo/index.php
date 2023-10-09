<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mein kleiner Zoo</title>
</head>
<body>
    <h1>Mein Zoo</h1>
    <?php
        $zoo = ["Löwe", "Elefant", "Giraffe", "Eisbär", "Panther"];

        //Wieviele Tiere wohnen im Zoo?
        $anzahl = count($zoo);
        echo "Hier wohnen " . $anzahl . " glückliche Tiere. ";

        //Es ziehen noch 2 Tiere ein
        $zoo[] = "Kuh";
        $zoo[] = "Fledermaus";
        echo "Jetzt sind es " . count($zoo) . " Tiere.";

        //Alle Bewohner:innen anzeigen
        echo "<ol>";
        for ($i=0; $i<count($zoo); $i++)  {
            echo "<li>" . $zoo[$i] . "</li>";
        }
        echo "</ol>";

        /* Nicht so "praktische" Variante
        for ($i=0; $i<count($zoo); $i++)  {
            echo $i+1 .". " . $zoo[$i] . "<br>";
        }*/

        //Besucher mit Namen und Alter
        $besucher = ["Edith"=>48, "Vera"=>10, "Walter"=>61, "Lukas"=>5];
        
        echo "Heute waren " . count($besucher) . " Besucher:innen im Zoo.<br>";
        echo "Edith ist " . $besucher["Edith"] . " Jahre alt.";

        //Alle Besucher:innen anzeigen
        echo "<ol>";
        foreach($besucher as $person=>$alter) {
            echo "<li>" . $person . " (" . $alter . " Jahre)</li>";
        }
        echo "</ol>";

        echo "<ol>";
        foreach($besucher as $wert) {
            echo "<li>" . $wert . " Jahre</li>";
        }
        echo "</ol>"; 
    ?>
</body>
</html>