<?php include("header.php"); 
$sql = "SELECT `naamOefening`, `hoeLangGedaan`, `hoeZwaarGedaan`, `waneer` FROM `oefening` WHERE `gebruikersID`= $id ORDER BY `oefeningID` ";
$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc() ) {
		 $laatste = $row["naamOefening"];
		}
	}

?>

<h1 class="titel"> <a href="http://localhost/jaar3/projectenP9/resulaten.php">Resultaten</a></h1>
<div class="boxen-container">
	<p>laatste meeting: <?php echo "$laatste"; ?></p>

	<?php $result = $conn->query($sql);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc() ) {
			$naamoef = $row["naamOefening"];
			$hoelang = $row["hoeLangGedaan"];
			$hoeZwaarGedaan = $row["hoeZwaarGedaan"];
			$waneer = $row["waneer"];
		 echo "$naamoef - DAB <br>";
		}
	}




	?>



</div>

</body>
</html>