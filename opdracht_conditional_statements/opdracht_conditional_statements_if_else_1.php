<!DOCTYPE html>

<?php 
    $jaartal = 2016;
    $isSchrikkeljaar = FALSE;

    if ($jaartal / 4 == 0)
    {
        $isSchrikkeljaar = TRUE;
    }
    else
    {
        if ($jaartal / 100 == 0)
        {
            $isSchrikkeljaar = FALSE;
        }
        else
        {
            if ($jaartal / 400 == 0)
            {
                $isSchrikkeljaar = TRUE;
            }
            else
            {
                $isSchrikkeljaar = FALSE;
            }
        }
    }
?>

<html>
    <head>
        <title>Opdracht if else: deel 1</title>
    </head>
    <body>
        
    </body>
</html>