<!DOCTYPE html>

<?php 
    $lettertje = "e";
    $cijfertje = 3;
    $langsteWoord = "zandzeepsodemineralenwatersteenstralen";
?>

<html>
    <head>
        <title>Opdracht string extra functions</title>
    </head>
    <body>
        <h1>Deel 3</h1>
        <p><?php echo str_replace($lettertje, $cijfertje, $langsteWoord); ?></p>
    </body>
</html>