<!DOCTYPE html>
<?php
    function renteBerekenen ($budget, $procent, $jaar)
    {
        for ($i = 1; $i <= $jaar; $i++)
        {
            $budget = $budget + ($budget * ($procent / 100));
            $arrayBudget[$i] = $budget;
        }
        
        printRenteBerekenen($arrayBudget, $procent);
    }

    function printRenteBerekenen ($array, $procent)
    {
        $i = 1;
        
        foreach ($array as $value)
        {
            echo "Na ";
            echo $i;
            echo " jaar staat er ";
            echo round($value);
            echo " op de bank.";
            echo "<br />";
            
            $i++;
        }
    }

    renteBerekenen (100000, 1, 10);
?>

<html>
    <head>
        <title>Oplossing functies recursief</title>
    </head>
    <body>
        
    </body>
</html>