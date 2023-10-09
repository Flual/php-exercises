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
    <h1>Countdown zum Jahresende</h1>
    <?php 
        //1. Datum für 7.11.2022 erstellen
        //und in Variable speichern
        $datum = mktime(0, 0, 0, 11, 7, 2022);

        $tag = date("d", $datum); // 7
        $monat = date("m", $datum); // 11
        $weiter = 1;

        while ($weiter == 1){
            echo date("d.M.Y", $datum) . "<br>";
             
            $datum = $datum+24*60*60;
            $tag = date("d", $datum); 
            $monat = date("m", $datum);

            if ($tag==31 && $monat==12) {
                $weiter = 0;
                echo date("d.M.Y", $datum) . "<br>";
            }
        } 
    ?>
</body>
</html>