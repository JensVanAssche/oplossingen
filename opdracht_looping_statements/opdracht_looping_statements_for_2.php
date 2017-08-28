<!DOCTYPE html>
<?php
    $rijen = 10;
    $kolommen = 10;

    echo "<table>";
    for ($i = 0; $i <= 10; $i++)
    {
        echo "<tr>";
        for ($j= 0; $j <= 10; $j++)
        {
            echo "<td>";
            echo $i * $j;
            echo "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
?>

<html>
    <head>
        <title>Oplossing for lus: deel 2</title>
    </head>
    <body>
        
    </body>
</html>