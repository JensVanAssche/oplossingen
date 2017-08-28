<!DOCTYPE html>
<?php
    $boodschappenlijstje = array("brood", "patatten", "bier", "groenten");
    $i = 0;

    echo "<ul>";
    while($i <= 3)
    {
        echo "<li>";
        echo $boodschappenlijstje[$i];
        echo "</li>";
        $i++;
    }
    echo "</ul>"
?>

<html>
    <head>
        <title>Oplossing while lus: deel 2</title>
    </head>
    <body>
        
    </body>
</html>