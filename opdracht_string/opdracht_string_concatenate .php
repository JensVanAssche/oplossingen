<!DOCTYPE html>

<?php 
    $voornaam = "Jens ";
    $achternaam = "Van Assche";

    $volledige_naam = $voornaam . $achternaam;
?>

<html>
    <head>
        <title>Opdracht string concatenate</title>
    </head>
    <body>
        <p><?= $volledige_naam ?></p>
        <p><?php echo strlen($volledige_naam); ?> </p>
    </body>
</html>