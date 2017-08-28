<!DOCTYPE html>
<?php
    $dieren = array("hond", "kat", "goudvis", "konijn", "cavia", "hamster");

    $dierenLength = count($dieren);

    $teZoekenDier = "konijn";
    $message = "niet gevonden";

    if (in_array($teZoekenDier, $dieren))
    {
        $message = "gevonden";
    }
?>

<html>
    <head>
        <title>Oplossing array functies: deel 1</title>
    </head>
    <body>
        <p><?php echo $dierenLength ?></p>
        <p><?php echo $message ?></p>
    </body>
</html>