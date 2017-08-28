<!DOCTYPE html>

<?php
    $getal = 3;
    $dag;
    
    switch ($getal)
    {
        case 1:
            $dag = "maandag";
            break;
            
        case 2:
            $dag = "dinsdag";
            break;
            
        case 3:
            $dag = "woensdag";
            break;
            
        case 4:
            $dag = "donderdag";
            break;
            
        case 5:
            $dag = "vrijdag";
            break;
            
        case 6:
            $dag = "zaterdag";
            break;
            
        case 7:
            $dag = "zondag";
            break;
            
        default:
            $dag = "geen geldig getal";
            break;
    }
?>

<html>
    <head>
        <title>Opdracht if else if</title>
    </head>
    <body>
        <p><?php echo $dag ?></p>
    </body>
</html>