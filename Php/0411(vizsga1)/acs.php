<?php
	echo "<h1>Számkereső</h1>";
	echo "<LINK REL='stylesheet' TYPE='text/css' HREF='acs.css'>";
	echo "<form method = 'post'>\n";
	echo "<table id=tabla><tr><td>Keresett szám:</td>";
	echo "<td rowspan=2><input class=mehet type = 'submit' name = 'gomb' value='Mehet'></td>";
	echo "<tr><td>0< <input class=be type = 'number' name = 'be'> <11</td>";
	echo "</form>\n";
	echo "</table>";
	if(isset($_POST['gomb'])){
		if(isset($_POST['be'])){
			echo "A keresett szám: $_POST[be]";
		}
		echo "<table>";
		echo "<tr>";
		if(isset($_POST['be'])){
			$be=$_POST['be'];
			$benne=false;
			if(is_numeric($be)){
				echo "<td colspan=5>Szám?</td> <td colspan=5> Igen</td>";
			}
			else
				echo "<td colspan=5>Szám?</td> <td colspan=5> Nem</td>";
		for($i=0;$i<10;$i++){
			$szamok[]=rand(1,10);
			//echo "<td>$szamok[$i]</td>";
			if($szamok[$i]==$be){
				$benne=true;
			}
		}
		echo "<tr><td colspan=5>Benne van?</td>";
		if($benne)
			echo"<td colspan=5>Igen</td><tr>";
		else
			echo"<td colspan=5>Nem</td><tr>";
		for($i=0;$i<10;$i++)
			if($be==$szamok[$i])
				echo "<td id=zold>$szamok[$i]</td>";
			else
				echo "<td >$szamok[$i]</td>";
		}
	}
?>
