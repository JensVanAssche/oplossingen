<!DOCTYPE html>

<?php 
    $text = file_get_contents("../../cursus/public/cursus/opdrachten/opdracht-looping-statements-foreach/text-file.txt");
    $textChars = str_split($text);
    rsort($textChars);
    $textChars = array_reverse($textChars);

	foreach($textChars as $value)
	{
		if (isset($result[$value]))
		{
			++$result[$value];
		}
		else
		{
			$result[$value] = 1;
		}
	}

    var_dump($result);
    
?>

<html>
    <head>
        <title>Opdracht foreach: deel 1</title>
    </head>
    <body>
        
    </body>
</html>