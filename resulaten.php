<?php include("header.php"); 
	$sizeOefening = 0;

	//uitvinden hoeveel instancies er zijn waar de gebruiker in voor komt
	$sql1= "SELECT COUNT(*) FROM vitaliteit WHERE `gebruikersID` = $id;";
	$result1 = $conn->query($sql1);
	if ($result1->num_rows > 0) {
		 while($row = $result1->fetch_assoc()) {
		 	$sizeVitaliteit = $row["COUNT(*)"];
		 }          
	}

	$sql2= "SELECT COUNT(*) FROM oefening WHERE `gebruikersID` = $id;";
	$result2 = $conn->query($sql2);
	if ($result2->num_rows > 0) {
		 while($row = $result2->fetch_assoc()) {
		 	$sizeOefening = $row["COUNT(*)"];
		 }
	}


?>
<h1 class="titel"> Resultaten </h1>
<div class="boxen-container">
	<a href="https://localhost/jaar3/projectenP9/resultaatOefeningen.php">
       <div class="box">
         <p>Oefeningen</p>
         <p class="klein"><?php  echo "$sizeOefening";?></p>
       </div> 
    </a>

    <a href="https://localhost/jaar3/projectenP9/resultaatVitaliteit.php">
       <div class="box">
         <p>Vitaliteit</p>
         <p class="klein"><?php  echo "$sizeVitaliteit";?></p>
       </div> 
    </a>
</div>








</body>
</html>