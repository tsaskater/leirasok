<?php
	echo "<html lang='hu'><meta charset='UTF-8'>";
	echo "<link rel=stylesheet type=text/css href=acs.css>";
	echo "<h1>Statisztika</h1>";
	
	$sorok=file("jegyek.txt");
	for($y=0;$y<count($sorok);$y++)
		$adatok[]=explode(chr(9),$sorok[$y]);
	echo "<table>\n";
	foreach($adatok as $sor){
		echo "\n<tr>";
		foreach($sor as $elem){
			echo "<td>$elem";
		}
	}
	echo "\n</table>\n";
	echo "<table>\n";
	$bsz=0;
	for($i=0;$i<5;$i++){
		echo"<td>";
		echo $adatok[0][$i];
	}
	echo"<td>Átlag";
	$oat;
	for($y=1;$y<5;$y++){
		echo "\n<tr>";
		$at=0;
		for($i=0;$i<5;$i++){
			if($adatok[$y][$i]==1){
				echo "<td id=bukas>";
				echo $adatok[$y][$i];
				$bsz++;
			}
			else{
				echo "<td>";
				echo $adatok[$y][$i];
			}
			if($i!=0){
				$at=$at+(int)$adatok[$y][$i];
				if($i==4){
					$at=$at/4;
					$oat[]=$at;
					echo "<td> $at";
				}
			}
		}
	}
	echo "\n</table>\n";
	echo "<p id=bukas>A bukások száma:$bsz</p>";
	echo "<p id=atlag>Az osztály átlaga: ";
	echo array_sum($oat)/count($oat);

?>
