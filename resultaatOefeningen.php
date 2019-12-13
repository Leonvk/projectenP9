<?php include("header.php"); 
$sql = "SELECT `naamOefening`, `hoeLangGedaan`, `hoeZwaarGedaan`, `waneer` FROM `oefening` WHERE `gebruikersID`= 9 ORDER BY `oefeningID` DESC LIMIT 1";
$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc() ) {
		 $laatste = $row["naamOefening"];
		}
	}

?>

<h1 class="titel"> <a href="http://localhost/jaar3/projectenP9/resulaten.php">Resultaten</a><br> /Oefeningen </h1>
<div class="boxen-container">
	<p>laatste meeting: <?php echo "$laatste"; ?></p>



</div>

</body>
</html>