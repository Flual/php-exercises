<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adventkalender 2022</title>
    <link href="style.css" type="text/css" rel="stylesheet" >
</head>
<body>
    <?php include "menu.php"; ?>
    <h1>Mein Adventkalender 2022</h1>
    <!-- Tabelle mit 25 Zeilen und 2 Spalten 
         Tag    |  Hinweis  |
         1.     |           |
         2.     |           |
         3.     |           |
    -->
    <?php
        echo "<table id='kalender'>";
        echo "<tr><th colspan='2'>Tag</th><th>Anmerkung</th></tr>";
        for ($i=1; $i<=24; $i++){
            
            $datum = mktime(0, 0, 0, 12, $i, 2022);

            if ($i==8 || $i==24) {
                //Feiertage
                echo "<tr class='feiertag'>";
            }
            else {
                //Alternierende Anzeige
                if ($i % 2 == 0) {
                    echo "<tr class='gerade'>";
                }
                else {
                    echo "<tr class='ungerade'>";
                }
            }

            echo "<td>" . date("l", $datum) . "</td>";

            echo "<td class='tag'>" . $i . ".</td>";
            echo "<td>";

            if ($i==8)  {
                echo "Maria Empfängnis";
            }
            else if ($i==24) {
                echo "Heiliger Abend";
            }
            else {
                echo "&nbsp;";
            }
            
            echo "</td>";
            echo "</tr>";
        }
        echo "</table>";
    ?>
</body>
</html>