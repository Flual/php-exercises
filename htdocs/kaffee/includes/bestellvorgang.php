<?php 
        //Wird das Element mit dem name 'Produkt' übergeben?
        if (isset($_POST["Produkt"])) {
            //Lies den Wert aus und entferne Leerzeichen
            $Produkt = trim($_POST["Produkt"]);

            //Produktcode darf nicht leer sein
            if (strlen($Produkt)>0) {

                //Wurde die Option "-- Bitte auswählen --" gewählt?
                if ($Produkt == "0") {
                    echo "Bitte wähle ein Produkt aus!";
                }
                else {
                    //Ein Produkt wurde ausgewählt
                    //switch ist die Fallunterscheidung
                    switch ($Produkt) {
                        case "C1": echo "Cappucino groß ist bestellt!"; break;
                        case "C2": echo "Chai Latte ist bestellt!"; break;
                        case "B1": echo "Bohnen 1 kg ist bestellt!"; break;
                        default: echo "Produkt ist nicht verfügbar."; break;
                    }
                }
            }
            else {
                echo "Leider ist eine Bestellung nicht möglich."; 
            }
        }
        else {
            echo "Leider ist eine Bestellung nicht möglich.";
        }
    ?>