<!DOCTYPE html>
<html>
  <head>
    <title>account aanmaken</title>
    <link rel="stylesheet" type="text/css" href="chat.css">
  </head>
  <body>
      <form action="" method="post">naam:
        <input type="text" name="newnaam" required>
        <br>
        wachtwoord:
        <input type="password" name="newwachtwoord" required><br>
        <input type="submit" name="submitt">
      </form>
    
      <!-- inlog knop-->
  <a href="startscherm.php">
    <button>inloggen</button> 
  </a>
<?php
      //naam controleren
      if(isset($_POST['submitt'])){ 
        include("connectdb.php");
        $gebruiker = $_POST['newnaam'];
        $wachtwoord = $_POST['newwachtwoord'];
        $bestaatNaam ="SELECT naam FROM gebruiker WHERE naam = '$gebruiker'";
        $result = mysqli_query($conn, $bestaatNaam);
        if (mysqli_num_rows($result) > 0) {

          //als hij wel bestaat
?>
          <p>sorry de gebruiker <?php echo $_POST['newnaam'] ?> bestaad al.</p>
<?php
          }else{
            //wat er gebeurt als de gebruiker nog niet bestaat (insert)
          $newnaam = $_POST['newnaam'];
            include("connectdb.php.php");
            $gebruiker = $_POST['newnaam'];
            $wachtwoord = $_POST['newwachtwoord'];
            $insertnaam ="INSERT INTO gebruiker(naam, wachtwoord) VALUES ('$gebruiker','$wachtwoord')";
            $result = mysqli_query($conn, $insertnaam);
            echo "gebruiker $gebruiker is aangemaakt. <a class='blue' href='homepage.php'>klik hier om verder tegaan.</a>";
        }
      }
?>
  </body>
</html>