<!DOCTYPE html>
<html>
  <head>
  <title>Homepage</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
  <?php if(!isset($_COOKIE["ingelogd"])){header("Location: https://localhost/jaar3/projectenP9/startscherm.php");} ?>
  </head>
  <body>
    
    
  <!--uitlog knop-->
        <form action="" method="post">
    	<input class="registerB" type="submit" value="uitloggen" name="uitloggen">
	      </form>

        <p><?php $naam = $_COOKIE['ingelogd']; echo "$naam"; ?></p>
    <?php
    	if(isset($_POST["uitloggen"])) {
    		if(isset($_COOKIE["ingelogd"])) {
    			setcookie ("ingelogd", $_POST['username'], time() -10);
    		}
			header("Location: https://localhost/jaar3/projectenP9/startscherm.php");
		}
    ?>

    <h1 class="titel"> Healty-Fit </h1>
    <div class="boxen-container">
      <a href="oefening.php">
        <div class="box">
         <p>Oefeningen</p>
       </div> 
      </a>
      <a href="vitaliteit.php">
        <div class="box">
          <p>Vitaliteit</p>
        </div>
      </a>
      <a href="resulaten.php">
        <div class="box">
          <p>Resultaten & vooruitgang</p>
        </div>
      </a>
    </div> 




  </body>
  <!-- uitlogknop functie -->
  <?php
    if(isset($_POST["uitloggen"])) {
      if(isset($_COOKIE["ingelogd"])) {
        setcookie ("ingelogd", $_POST['username'], time() -10);
      }
      header("Location: https://localhost/jaar3/projectenP9/startscherm.php");
    }
  ?>
</html>