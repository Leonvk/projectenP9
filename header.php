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
      <input class="registerB home" type="submit" name="home" value="home" name="home">
    	<input class="registerB" type="submit" value="uitloggen" name="uitloggen">
	      </form>

        <?php $naam = $_COOKIE['ingelogd']; ?>
    <?php
    	if(isset($_POST["uitloggen"])) {
    		if(isset($_COOKIE["ingelogd"])) {
    			setcookie ("ingelogd", $_POST['username'], time() -10);
    		}
			header("Location: https://localhost/jaar3/projectenP9/startscherm.php");
		}
    ?>

      <!-- uitlogknop functie -->
  <?php
    if(isset($_POST["uitloggen"])) {
      if(isset($_COOKIE["ingelogd"])) {
        setcookie ("ingelogd", $_POST['username'], time() -10);
      }
      header("Location: https://localhost/jaar3/projectenP9/startscherm.php");
    }

    if(isset($_POST["home"])) {
       header("Location: http://localhost/jaar3/projectenP9/homepage.php");
    }
  ?>

  <?php
        // id van de gebruiker vinden
      include("connectdb.php");
      $naamid ="SELECT `gebruikersID` FROM `gebruiker` WHERE `naam` = '$naam'";
      $result = $conn->query($naamid);
          if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
            $id = $row["gebruikersID"];
            }
        }
  ?>