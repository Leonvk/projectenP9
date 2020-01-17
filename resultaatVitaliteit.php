<?php include("header.php"); 
$sql = "SELECT `naam`, `waarde`, `waneer` FROM `vitaliteit` WHERE `gebruikersID`= $id ORDER BY `waneer` DESC ";

$sql2 = "SELECT `naam`, `waarde`, `waneer` FROM `vitaliteit` WHERE `gebruikersID`= $id ORDER BY `waneer` ";

$result = $conn->query($sql2);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc() ) {
		 $laatste = $row["naam"];
		 $laatste2 = $row["waarde"];
		 $laatste4 = $row["waneer"];
		 			if($laatste2 == ""){
				$laatste2 = "-";
			}
		}
	}

?>

<h1 class="titel"> <a href="http://localhost/jaar3/projectenP9/resulaten.php">Resultaten</a></h1>
<div class="boxen-container">
	<div class="meeting">
		<p>laatste meeting: <?php echo "<table><tr><th>oefening</th><th>waarde</th><th>waneer</th></tr>  <tr><td>$laatste</td><td>$laatste2</td><td>$laatste4</td></table>"; ?></p>
	</div>
	<table style="width:100%">
	<tr>
    	<th>oefening</th>
    	<th>waarde</th> 
    	<th>waneer</th>
 	</tr>

	<?php $result = $conn->query($sql);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc() ) {
			$naamoef = $row["naam"];
			$hoelang = $row["waarde"];
			$waneer = $row["waneer"];
			if($hoelang == ""){
				$hoelang = "-";
			}
		 echo " 
		 	<tr>
    			<td>$naamoef</td>
    			<td>$hoelang</td>
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