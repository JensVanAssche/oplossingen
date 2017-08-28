<!DOCTYPE html>

<?php
    $getal = 29;
    $tiental;

    if ($getal < 10)
    {
        $tiental = 10;
    }
    elseif ($getal < 20)
    {
        $tiental = 20;
    }
    elseif ($getal < 30)
    {
        $tiental = 30;
    }
    elseif ($getal < 40)
    {
        $tiental = 40;
    }
    elseif ($getal < 50)
    {
        $tiental = 50;
    }
    elseif ($getal < 60)
    {
        $tiental = 60;
    }
    elseif ($getal < 70)
    {
        $tiental = 70;
    }
    elseif ($getal < 80)
    {
        $tiental = 80;
    }
    elseif ($getal < 90)
    {
        $tiental = 90;
    }
    else
    {
        $tiental = 100;
    }
?>

<html>
    <head>
        <title>Opdracht if else if</title>
    </head>
    <body>
        <p>Het getal <?php echo $getal ?> ligt tussen <?php echo $tiental - 10 ?> en <?php echo $tiental ?></p>
    </body>
</html>