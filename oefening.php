<?php include("header.php"); 
$_POST["datenowoef"] = NULL;
?>
<h1 class="titel"> Oefeningen </h1>
<div class="boxen-container">
		<form action="" method="post">
			<div class="onderdeelvitaliteit">
				<p>Welke oefening heeft u gedaan?</p>
				<select name="oefening" class="Vitaliteit" required="">
  					<option value="push-up">push-up</option>
 					<option value="hard lopen">hardlopen</option>
  					<option value="dumbels">dumbels</option>
  					<option value="bench-press">bench-press</option>
				</select>
			</div>
			<div class="onderdeelvitaliteit">
				<p>Waneer is het gemeten?</p>
				<p class="nu">Nu:</p><input type="checkbox" name="datenowoef"><br>
				<input type="date" name="datetimeoef" class="Vitaliteit">
				<br>
			</div>
			<div id="onderonderdeel" class="onderdeelvitaliteit">
				<p class="optioneel">(Hoe zwaar / hoe hard?)</p><p class="klein">(optioneel)</p>
				<input type="number" step="any" min="0" max="9999" class="Vitaliteit" name="zwaar">
			</div>
			<div id="onderonderdeel" class="onderdeelvitaliteit">
				<p class="optioneel">(Hoe lang / hoevaak?)</p><p class="klein">(optioneel)</p>
				<input type="number" step="any" min="0" max="9999" class="Vitaliteit" name="lang">
			</div>
			<input type="submit" name="submitoef" value="opslaan" class="opslaan">
		</form>
	</div>

	<?php 
		//gegevens opslaan in variabele
		if(isset($_POST['submitoef'])){
			$oefening = $_POST["oefening"];

			$date = $_POST["datetimeoef"];
			if($date == NULL){
			$t=time();
				$date = date("Y-m-d",$t);
			}


			$zwaar = "";
			if ($_POST["zwaar"] != "") {
				$zwaar = $_POST["zwaar"];
			}

			$lang = "";
			if ($_POST["lang"] != ""){
				$lang = $_POST["lang"];
			}
    		//insert in de database
    		if($lang != "" && $zwaar != ""){
    		$insert ="INSERT INTO `oefening` (`oefeningID`, `naamOefening`, `hoeLangGedaan`, `hoeZwaarGedaan`, `gebruikersID`, `waneer`) VALUES (NULL, '$oefening', '$lang', $zwaar, '$id', '$date');";
			$result = mysqli_query($conn, $insert);
			}

			if($lang == "" && $zwaar != ""){
    		$insert ="INSERT INTO `oefening` (`oefeningID`, `naamOefening`, `hoeLangGedaan`, `hoeZwaarGedaan`, `gebruikersID`, `waneer`) VALUES (NULL, '$oefening', NULL, $zwaar, '$id', '$date');";
			$result = mysqli_query($conn, $insert);
			}

			if($lang != "" && $zwaar == ""){
    		$insert ="INSERT INTO `oefening` (`oefeningID`, `naamOefening`, `hoeLangGedaan`, `hoeZwaarGedaan`, `gebruikersID`, `waneer`) VALUES (NULL, '$oefening', '$lang', NULL, '$id', '$date');";
			$result = mysqli_query($conn, $insert);
			}

			if($lang == "" && $zwaar == ""){
    		$insert ="INSERT INTO `oefening` (`oefeningID`, `naamOefening`, `hoeLangGedaan`, `hoeZwaarGedaan`, `gebruikersID`, `waneer`) VALUES (NULL, '$oefening', NULL, NULL, '$id', '$date');";
			$result = mysqli_query($conn, $insert);
			}	

		}
	?>





</body>
</html>