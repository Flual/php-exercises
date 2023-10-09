<?php
    $aktuelleSeite = basename($_SERVER["PHP_SELF"]);

    $StartCss = "";
    $ShopCss = "";
    $AboutCss = "";
    $ContactCss = "";
    $Title = "";

    switch ($aktuelleSeite) {
        case "index.php":   $StartCss = "aktuell";   $Title="Start";    break;
        case "shop.php":    $ShopCss = "aktuell";    $Title="Shop";     break;
        case "about.php":   $AboutCss = "aktuell";   $Title="Über uns"; break;
        case "contact.php": $ContactCss = "aktuell"; $Title="Kontakt";  break;
        case "imprint.php": $Title="Impressum"; break;
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $Title?> - My little shop</title>
    <link rel="stylesheet" href="style.css?<?= date("is") ?>" type="text/css">
</head>
<body>
    <header>
        <ul>
            <li class="<?= $StartCss?>"><a href="index.php">Start</a></li>
            <li class="<?= $ShopCss?>"><a href="shop.php">Shop</a></li>
            <li class="<?= $AboutCss?>"><a href="about.php">Über uns</a></li>
            <li class="<?= $ContactCss?>"><a href="contact.php">Kontakt</a></li>
        </ul>
    </header>
    <div id="content">