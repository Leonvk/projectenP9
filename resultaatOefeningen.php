<?php include("header.php"); 
$sql = "SELECT `naamOefening`, `hoeLangGedaan`, `hoeZwaarGedaan`, `waneer` FROM `oefening` WHERE `gebruikersID`= $id ORDER BY `waneer` DESC ";
$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc() ) {
		 $laatste = $row["naamOefening"];
		 $laatste2 = $row["hoeLangGedaan"];
		 $laatste3 = $row["hoeZwaarGedaan"];
		 $laatste4 = $row["waneer"];
		}
	}

?>

<h1 class="titel"> <a href="http://localhost/jaar3/projectenP9/resulaten.php">Resultaten</a></h1>
<div class="boxen-container">
	<div class="meeting">
		<p>laatste meeting: <?php echo "<table><tr><th>oefening</th><th>hoe lang/vaak</th><th>hoe zwaar/hard</th><th>waneer</th></tr>  <tr><td>$laatste</td><td>$laatste2</td><td>$laatste3</td><td>$laatste4</td></table>"; ?></p>
	</div>
	<table style="width:100%">
	<tr>
    	<th>oefening</th>
    	<th>hoe lang/vaak</th> 
    	<th>hoe zwaar/hard</th>
    	<th>waneer</th>
 	</tr>

	<?php $result = $conn->query($sql);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc() ) {
			$naamoef = $row["naamOefening"];
			$hoelang = $row["hoeLangGedaan"];
			$hoeZwaarGedaan = $row["hoeZwaarGedaan"];
			$waneer = $row["waneer"];
			if($hoelang == ""){
				$hoelang = "-";
			}
			if($hoeZwaarGedaan == ""){
				$hoeZwaarGedaan = "-";
			}
		 echo " 
		 	<tr>
    			<td>$naamoef</td>
    			<td>$hoelang</td>
    			<td>$hoeZwaarGedaan</td>
    			<td>$waneer</td>
  			</tr>
  			<br>";
		}
	}
	?>
</table>



</div>

</body>
</html>