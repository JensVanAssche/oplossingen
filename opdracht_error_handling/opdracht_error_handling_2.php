<?php
	session_start();
	spl_autoload_register (function ($className) {include "classes/" . $className . ".php";});

	$isValid = false;
	$messageOutput = false;
	$messageObject = new Message();

	try {
		if (isset($_POST["submit"]))
        {
			if (isset($_POST["code"]))
            {
				if (strlen($_POST["code"]) == 8)
                {
					$isValid = true;
				}
				else
                {
					throw new Exception("VALIDATION-CODE-LENGTH");
				}
			}
			else
            {
				throw new Exception("SUBMIT-ERROR");
			}
		}
	}

	catch (Exception $e) {
		$messageCode = $e -> getMessage();
		$message = array();
		$createMessage = false;
        
		switch ($messageCode)
        {
			case "SUBMIT-ERROR":
                $message["type"] = "error";
                $message["text"] = "Er werd met het formulier geknoeid";
				break;
                
			case "VALIDATION-CODE-LENGTH":
                $message["type"] = "error";
				$message["text"] = "De kortingscode heeft niet de juiste lengte";
				$createMessage = true;
				break;
		}
        
		logToFile ($message);
        
		if ($createMessage)
        {
			$messageObject -> setMessage($message);
		}
        
		$messageOutput = $messageObject -> getMessage();
	}

	function logToFile($message) {
		$date = date("H:i:s d/m/Y");
		$ip = $_SERVER["REMOTE_ADDR"];
		$errorString = "[" . $date . "] - " . $ip . " - type:[" . $message["type"] . "] " . $message["text"] . "\n\r";
		file_put_contents("log.txt", $errorString, FILE_APPEND);
	}
?>

<!DOCTYPE html>
<html>
	<head>
	    <title>Oplossing error handling deel 2</title>
	</head>
	<body>
		<h1>Geef uw kortingscode op</h1>
		<?php if($messageOutput): ?>
			<p class="<?= $messageOutput["type"] ?>"><?= $messageOutput["text"] ?></p>
		<?php endif ?>
		<?php if($isValid): ?>
			<p>Korting toegekend!</p>
		<?php else: ?>
			<form action="" method="post">
				<label for="code">Kortingscode</label><input type="text" name="code" id="code">
				<input type="submit" name="submit">
			</form>
		<?php endif ?>
	</body>
</html>