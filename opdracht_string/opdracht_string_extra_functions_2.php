<!DOCTYPE html>

<?php 
    $fruit = "ananas";
?>

<html>
    <head>
        <title>Opdracht string extra functions</title>
    </head>
    <body>
        <h1>Deel 2</h1>
        <p><?php echo strpos($fruit, "a", 3 ); ?></p>
        <p><?php echo strtoupper($fruit); ?></p>
    </body>
</html>