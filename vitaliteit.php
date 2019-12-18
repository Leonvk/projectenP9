<?php include("header.php"); ?>
<h1 class="titel"> Vitaliteit </h1>
	<div class="boxen-container">
		<form action="" method="post">
			<div class="onderdeelvitaliteit">
				<p>Welke vitaliteits eigenschap wilt u meten?</p>
				<select name="Vitaliteit" class="Vitaliteit" required="">
  					<option value="Hartslag">Hartslag</option>
 					<option value="Suikerwaarde">suikerwaarde</option>
  					<option value="Bloeddruk">bloeddruk</option>
  					<option value="Gewicht">gewicht</option>
				</select>
			</div>
			<div class="onderdeelvitaliteit">
				<p>Waneer is het gemeten?</p>
				<p class="nu">Nu:</p><input type="checkbox" name="datenow"><br>
				<input type="date" name="datetime" class="Vitaliteit" value="">
				<br>
			</div>
			<div id="waarde" class="onderonderdeel, onderdeelvitaliteit">
				<p>Waarde</p>
				<input type="number" step="any" min="0" max="9999" class="Vitaliteit" name="waarde" required="">
			</div>
			<input type="submit" name="submit" value="opslaan" class="opslaan">
		</form>
	</div>

	<?php 
		//gegevens verzenden naar de database
		if(isset($_POST['submit'])){
			$Vitaliteit = $_POST["Vitaliteit"];

			$date = $_POST["datetime"];
			if($date == NULL){
			$t=time();
				$date = date("Y-m-d",$t);
			}

			$waarde = $_POST["waarde"];

    		//insert in de database
			$insert ="INSERT INTO `vitaliteit` (`vitaliteitID`, `waneer`, `waarde`, `gebruikersID`, `naam`) VALUES (NULL, '$date', $waarde, $id, '$Vitaliteit')";
			$result = mysqli_query($conn, $insert);

		}
	?>
</body>
</html>