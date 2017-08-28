<!DOCTYPE html>
<?php
    $dieren[0] = "hond";
    $dieren[1] = "kat";
    $dieren[2] = "kanarie";
    $dieren[3] = "goudvis";
    $dieren[4] = "parkiet";
    $dieren[5] = "salamander";
    $dieren[6] = "hagedis";
    $dieren[7] = "papegaai";
    $dieren[8] = "paard";
    $dieren[9] = "muis";

    $dieren = array("hond", "kat", "kanarie", "goudvis", "parkiet", "salamander", "hagedis", "papegaai", "paard", "muis");

    $voertuigen["landvoertuigen"] = array("vespa", "fiets");
    $voertuigen["watervoertuigen"] = array("surfplank", "vlot", "schoener", "driemaster");
    $voertuigen["luchtvoertuigen"] = array("luchtballon", "helicopter", "B52");
?>

<html>
    <head>
        <title>Oplossing array basics: deel 1</title>
    </head>
    <body>
        <p><?php var_dump($voertuigen)?></p>
    </body>
</html>