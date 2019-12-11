<!DOCTYPE html>
<html>
  <head>
    <title>account aanmaken</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
  </head>
  <body>
          <!-- inlog knop-->
    <a href="startscherm.php">
      <button class="registerB">inloggen</button> 
    </a>

    <h1 class="titel">Healty-Fit</h1>
    <div class="inlog-container">
      <!--registreer knoppen en functie-->
      <form action="" method="post">
        <p>naam:</p>
        <input type="text" name="newnaam" required>
        <br>
        <p>wachtwoord:</p>
        <input type="password" name="newwachtwoord" required>
        <br>
        <p>wachtwoord:</p>
        <input type="password" name="newwachtwoord2" required>
        <br>
        <input class="inlogB" type="submit" name="submitt" value="Registreren">
      </form>
    

<?php
      //gegevens controle
      if(isset($_POST['submitt'])){
        if($_POST['newwachtwoord'] != $_POST['newwachtwoord2']){
          ?><p>Vul het wachtwoord 2x juist in.</p> <?php
        }else{
        //kijken of er al een account bestaat met dezelfde naam
        include("connectdb.php");
        $gebruiker = $_POST['newnaam'];
        $wachtwoord = $_POST['newwachtwoord'];
        $bestaatNaam ="SELECT naam FROM gebruiker WHERE naam = '$gebruiker'";
        $result = mysqli_query($conn, $bestaatNaam);
        if (mysqli_num_rows($result) > 0) {
          //als hij wel bestaat
?>
          <p>sorry de gebruiker <?php echo $_POST['newnaam'] ?> bestaat al.</p>
<?php
          }else{
            //wat er gebeurt als de gebruiker nog niet bestaat (insert)
          $newnaam = $_POST['newnaam'];
            include("connectdb.php.php");
            $gebruiker = $_POST['newnaam'];
            $wachtwoord = $_POST['newwachtwoord'];
            $wachtwoordd = md5($wachtwoord);
            $insertnaam ="INSERT INTO gebruiker(naam, wachtwoord) VALUES ('$gebruiker','$wachtwoordd')";
            $result = mysqli_query($conn, $insertnaam);
            header("Location: https://localhost/jaar3/projectenP9/startscherm.php");
        }
      }
    }
?>
  </body>
</html>