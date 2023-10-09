<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anmeldung erforderlich</title>
</head>
<body>
    <?php
        if($_SERVER["REQUEST_METHOD"]=="GET")
        {
            include "formular.htm";
        }
        else
        {   $Fehler = false;
            //Sind genau zwei Elemente vorhanden
            if(count($_POST)==2)
            {
                if(isset($_POST["username"]) && isset($_POST["password"])) 
                {
                    $username = strtolower(trim($_POST["username"]));
                    $password = trim($_POST["password"]);

                    $anzUsername = strlen($username);
                    $anzPassword = strlen($password);

                        if($anzUsername >= 3 && $anzPassword >= 6)
                        {
                            //Username = Heywood
                            //Password = Samurai
/*
                            if($username == "Heywood" ||$username=="heywood" && $password =="Samurai")
                            {
                                echo "Anmeldung erfolgt!";
                            }
                        }
                        else 
                        {
                            $Fehler = true;
                            echo "Anmeldung nicht möglich!";
 */                     } 
                        $con = mysqli_connect("localhost","root","","personendb"); 
                        $sql = "SELECT BenutzerID FROM TBenutzer ";
                        $sql .= "WHERE Benutzer='" . $username . "' ";
                        $sql .= "AND Kennwort='" . $password . "' ";
                        echo $sql;

                        $daten = mysqli_query($con, $sql);
                        $anzahl = mysqli_num_rows($daten);
                            if($anzahl==1)
                            {
                                echo "Anmeldung erfolgt!";

                            }
                            else 
                            {
                                $Fehler = true;
                            }
                            mysqli_free_result($daten);
                            mysqli_close($con);
                

               }
                else 
                {
                    $Fehler = true;
                    echo "Anmeldung nicht möglich!";
                }
    
            }
            else 
            {
                $Fehler = true;
                echo "Anmeldung nicht möglich!";
            }
            
            

        }









    ?>
</body>
</html>