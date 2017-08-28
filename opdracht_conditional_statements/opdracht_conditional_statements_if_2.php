<!DOCTYPE html>

<?php 
    $getal = 1;
    $day = "";

    if ($getal == 1)
    {
        $day = "maandag";
    }

    if ($getal == 2)
    {
        $day = "dinsdag";
    }

    if ($getal == 3)
    {
        $day = "woensdag";
    }

    if ($getal == 4)
    {
        $day = "donderdag";
    }

    if ($getal == 5)
    {
        $day = "vrijdag";
    }

    if ($getal == 6)
    {
        $day = "zaterdag";
    }

    if ($getal == 7)
    {
        $day = "zondag";
    }

    $upperDay = strtoupper($day);
    $upperA = "A";
    $lowerA = "a";

?>

<html>
    <head>
        <title>Opdracht conditional statements</title>
    </head>
    <body>
        <h1>Deel 1</h1>
        <p><?php echo $upperDay; ?></p>
        <p><?php echo str_replace($upperA, $lowerA, $upperDay); ?></p>
        <p><?php echo str_replace($upperA, $lowerA, $upperDay); ?></p>
    </body>
</html>