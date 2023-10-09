<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Personen Verwalten</h1>

        <?php
            //1.Verbimdung aufbauen
            $con = mysqli_connect("localhost","root","","personendb"); 

            //2. Abfrage SQL Select ausführen
            $sql = "SELECT * FROM TPerson, TPlz WHERE FKPLZ=PLZ ORDER BY Vorname ASC";
            $daten = mysqli_query($con, $sql);

            //3. Wieviele Zeilen 
            $anzahl = mysqli_num_rows($daten);

            if($anzahl == 0)
            {
                echo "Es wurden keine Datensätze gefunden!";
            }

            else 
            {
                while ($zeile = mysqli_fetch_array($daten))
                {
                    echo $zeile["Vorname"] . " " . "wohnt in " . $zeile["FKPLZ"] . " " . $zeile["ORT"];
                    echo "<br>";
                }
            };

            mysqli_free_result($daten);
            mysqli_close($con);
        ?>
</body>
</html>