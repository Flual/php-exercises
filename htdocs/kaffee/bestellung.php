<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mein cooler Coffeeshop</title>
</head>
<body>
    <?php
        $aufruf = $_SERVER["REQUEST_METHOD"];

        if ($aufruf == "GET") {
            include "includes/formular.htm";
        }
        else {
            include "includes/bestellvorgang.php";
        }
    ?>
</body>
</html>