<!DOCTYPE html>
<?php
    function berekenSom ($getal1, $getal2)
    {
        return $getal1 + $getal2;
    }

    function vermenigvuldiging ($getal1, $getal2)
    {
        return $getal1 * $getal2;
    }

    function isEven ($getal)
    {
        if($getal % 2 == 0)
        {
            $boolean = TRUE;
        }
        else
        {
            $boolean = FALSE;
        }
        
        return $boolean;
    }

    echo berekenSom(5, 6);
    echo "<br />";
    echo vermenigvuldiging(5, 6);
    echo "<br />";
    if (isEven(5))
    {
        echo "TRUE";
    }
    else
    {
        echo "FALSE";
    }
?>

<html>
    <head>
        <title>Oplossing functies: deel 1</title>
    </head>
    <body>
        
    </body>
</html>