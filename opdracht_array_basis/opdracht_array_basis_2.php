<!DOCTYPE html>
<?php
    $getallen = array(1, 2, 3, 4, 5);
    $vermenigvuldiging = $getallen[0] * $getallen[1] * $getallen[2] * $getallen[3] * $getallen[4];

    $andereGetallen = array(5, 4, 3, 2, 1);
    
    
?>

<html>
    <head>
        <title>Oplossing array basics: deel 2</title>
    </head>
    <body>
        <p><?php echo $vermenigvuldiging ?></p>
        
        <p><?php echo $getallen[0] + $andereGetallen[0]?></p>
        <p><?php echo $getallen[1] + $andereGetallen[1]?></p>
        <p><?php echo $getallen[2] + $andereGetallen[2]?></p>
        <p><?php echo $getallen[3] + $andereGetallen[3]?></p>
        <p><?php echo $getallen[4] + $andereGetallen[4]?></p>
    </body>
</html>