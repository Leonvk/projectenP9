	<?php 
		if(isset($_POST['submit'])){ 
    		if($_POST['username'] != ""){
      			include("connectdb.php");
      			$username = $_POST['username'];
      			$password = $_POST['password'];
      			$check ="SELECT * FROM gebruiker WHERE naam = '$username' AND wachtwoord = '$password'";
      $result = mysqli_query($conn, $check);
      if (mysqli_num_rows($result) > 0) {
        setcookie ("ingelogd", $_POST['username'], time() + 10 * 30);
      	header("Location: https://localhost/jaar3/projectenP9/homepage.php");
      } else {
        echo "error foute user of wachtwoord";
      }
  }
}
	?>