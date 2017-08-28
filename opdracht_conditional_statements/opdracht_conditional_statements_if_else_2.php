<!DOCTYPE html>

<?php 
    $aantalSeconden = 221108521;
    $minuten;
    $uren;
    $dagen;
    $weken;
    $maanden;
    $jaren;

    $minuten = $aantalSeconden / 60;
    $uren = $minuten / 60;
    $dagen = $uren / 24;
    $weken = $dagen / 7;
    $maanden = $dagen / 31;
    $jaren = $maanden / 12;
?>

<html>
    <head>
        <title>Opdracht if else: deel 2</title>
    </head>
    <body>
        <p>In <?php echo $aantalSeconden ?> seconden zitten:</p>
        <ul>
            <li>minuten: <?php echo round($minuten) ?></li>
            <li>uren: <?php echo round($uren) ?></li>
            <li>dagen: <?php echo round($dagen) ?></li>
            <li>weken: <?php echo round($weken) ?></li>
            <li>maanden: <?php echo round($maanden) ?></li>
            <li>jaren: <?php echo round($jaren) ?></li>
        </ul>
    </body>
</html>