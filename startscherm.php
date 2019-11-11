<!DOCTYPE html>
<html>
<head>
	<title>inlog</title>
	<?php session_start(); 
	if(isset($_COOKIE["ingelogd"])) {
   			header("Location: https://localhost/jaar3/projectenP9/homepage.php");
    	}
    ?>
</head>
<body>
  <!--inlog knoppen en functie-->
	<form action="" method="post">
		Name:<input type="text" name="username" value="" required>
        wachtwoord:
        <input type="password" name="password" value="" required>
        <input type="submit" name="submit">
	</form>
	<?php include("inloggenfunctie.php"); ?>
  
  <!-- registreer knop-->
  <a href="registreerpagina.php">
    <button>registreren</button> 
  </a>


</body>
</html>