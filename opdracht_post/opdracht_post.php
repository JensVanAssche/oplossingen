<!DOCTYPE html>
<?php
    $username = "Jens";
    $password = "legitpassword";
    $message = "Log in aub:";

    if (isset($_POST['submit']))
	{
		if($_POST['username'] == $username && $_POST['password'] == $password)
		{
			$message = "Welkom!";
		}
		else
		{
			$message = "Er is iets mis gegaan tijdens het inloggen. Probeer opnieuw.";
		}
	}
?>

<html>
    <head>
        <title>Oplossing post</title>
    </head>
    <body>
       <h1>Inloggen</h1>
       <p><?php echo $message ?></p>
        <form action="opdracht_post.php" method="post">
           <label for="username">Username</label>
            <input type="text" name="username" id="username">
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
            <button type="submit" name="submit">Verzenden</button>
        </form>
    </body>
</html>