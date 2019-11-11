<!DOCTYPE html>
<html>
  <head>
  <title>Homepage</title>
  
  </head>
  <body>
    hoi
    
    
    
    
  <!--uitlog knop en functie-->
        <form action="" method="post">
    	<input type="submit" value="uitloggen" name="uitloggen">
	</form>
    <?php
    	if(isset($_POST["uitloggen"])) {
    		echo "hiii";
    		if(isset($_COOKIE["ingelogd"])) {
    			setcookie ("ingelogd", $_POST['username'], time() -10);
    		}
			header("Location: https://localhost/jaar3/projectenP9/startscherm.php");
		}
    ?>
  </body>


</html>