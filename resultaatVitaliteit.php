<?php include("header.php"); 
$sql = "SELECT `vitaliteitID`, `waneer`, `waarde`, `gebruikersID`, `naam` FROM `vitaliteit` WHERE `gebruikersID`= $id ORDER BY `vitaliteitID` ";
$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc() ) {
		 $laatste = $row["naam"];
		}
	}

?>


<h1 class="titel"> <a href="http://localhost/jaar3/projectenP9/resulaten.php">Resultaten</a></h1>
<div class="boxen-container">
	<p>laatste meeting: <?php echo "$laatste"; ?></p>

</div>








</body>
</html>