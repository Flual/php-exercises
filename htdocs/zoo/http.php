<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server Variablen</title>
</head>
<body>
    <h1>Inhalte der Server Variablen</h1>
    <h2>$_SERVER</h2>
    <?php
        echo "<ul>";
        foreach ($_SERVER as $key=>$value) {
            //echo "<li>" . $key . ": " . $value . "</li>";
            echo "<li>";
            echo $key;
            echo ": ";
            echo $value;
            echo "</li>";
        }
        echo "</ul>";
    ?>

    <h2>$_GET</h2>
    <?php
        echo "<ul>";
        foreach ($_GET as $key=>$value) {
            echo "<li>" . $key . ": " . $value . "</li>";
        }
        echo "</ul>";

        //Prüfen, ob mindestens ein Parameter übergeben wurde
        if (count($_GET) > 0)
        {   //Prüft, ob der Parameter 'name' vorhanden ist.
            if (isset($_GET["name"])) {
                //Prüft, ob der Parameter 'alter' vorhanden ist.
                if (isset($_GET["alter"])) {
                    
                    //Hier wissen wir, dass die beiden Parameter vorhanden sind.

                    //Wir wissen noch nicht, ob sie Werte haben.
                    //Weiters wissen wir auch nich, ob die Werte gültig sind.

                    //Beide Parameter müssen mindestens 1 Zeichen lang sein
                    //Entferne mögliche Leerzeichen am Anfang und Ende der Zeichenkette
                    $name = trim($_GET["name"]);
                    $alter = trim($_GET["alter"]);

                    if (strlen($name) > 0 && strlen($alter) > 0){
                        //Wert in $alter muss eine ganze Zahl sein
                        if (is_numeric($alter)) {

                            //Die Zeichenkette in eine Zahl umwandeln
                            $dasAlter = intval($alter);

                            if ($dasAlter > 0 && $dasAlter < 120) {

                                //echo $_GET["name"] . " ist " . $_GET["alter"] . " Jahre alt.";
                                echo $name . " ist " . $dasAlter . " Jahre alt.";
                            }
                            else {
                                echo "Dein Alter ist unglaubwürdig.";
                            }
                        }
                        else {
                            echo "Alter ist nicht gültig.";
                        }
                    }
                    else {
                        echo "Eingabe zu kurz.";
                    }
                }
                else {
                    echo "Alter fehlt.";
                }
            }
            else {
                echo "Name fehlt.";
            }
        }
        else {
            echo "Bitte 2 Paramter.";
        }

       
    ?>
</body>
</html>