<!DOCTYPE html>
<?php
    $getal = 0;

    while ($getal <= 100)
    {
        echo $getal;
        echo ", ";
        $getal++;
    }

    echo "<br />";
    $getal = 0;
        
    while ($getal <= 100)
    {
        if ($getal % 3 == 0 && 40 < $getal < 80)
        {
            echo $getal;
            echo ", ";
            $getal++; 
        }
    }


?>

<html>
    <head>
        <title>Oplossing while lus: deel 1</title>
    </head>
    <body>
        
    </body>
</html>