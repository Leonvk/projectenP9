<!DOCTYPE html>
<html>
<head>
	<title>inlog</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<?php session_start(); 
	if(isset($_COOKIE["ingelogd"])) {
   			header("Location: https://localhost/jaar3/projectenP9/homepage.php");
    	}
    ?>
</head>
<body>
	<!-- registreer knop-->
	<a href="registreerpagina.php">
    	<button class="registerB">registreren</button> 
  	</a>

	<h1 class="titel">Healty-Fit</h1>
	<div class="inlog-container">
		<!--inlog knoppen en functie-->
		<form action="" method="post">
			<p>Naam:</p>
			<input type="text" name="username" value="" required>
			<br>
        	<p>Wachtwoord:</p>
       		<input type="password" name="password" value="" required>
       		<br>
       		<input class="inlogB" type="submit" name="submit" value="Log In">
		</form>
		<?php include("inloggenfunctie.php"); ?>
	</div>	



</body>
</html>