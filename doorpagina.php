<!DOCTYPE html>
<html>
<head>
</head>
<body>
	hoi

	<?php
		if(isset($_COOKIE["ingelogd"])) {
   			print "<p id='cookietext'>Bedankt dat je weer op de website terug bent gekomen.🙂</p>";
    	}
    ?>

    <form action="" method="post">
    	<input type="submit" name="uitloggen">
	</form>
    <?php
    	if(isset($_POST["uitloggen"])) {
    		echo "hiii";
    		if(isset($_COOKIE["ingelogd"])) {
    			setcookie ("ingelogd", $_POST['username'], time() -10);
    		}
			header("Location: https://localhost/jaar2/ik%20weet%20niet/startscherm.php");
		}
    ?>
</body>
</html>