<?php
		if(isset($_POST['gomb'])){
			$m=mt_rand(0,2);
			switch ($m){
				case 0:{
					echo "$_POST[valasz] vs Kő<br>";
					if($_POST['valasz']=="papir"){
						echo "nyertél<br>";
					}
					elseif($_POST['valasz']=="ollo"){
						echo "vesztettél<br>";
					}
					else {
						echo "döntetlen<br>";
					}
					break;
				}
				case 1:{
					echo "$_POST[valasz] vs Papír";
					if($_POST['valasz']=="ollo"){
						echo "nyertel<br>";
					}
					elseif($_POST['valasz']=="ko"){
						echo "vesztettél<br>";
					}
					else {
						echo "döntetlen<br>";
					}
					break;
				}
				case 2:{
					echo "$_POST[valasz] vs Olló<br>";
					if($_POST['valasz']=="ko"){
						echo "nyertel<br>";
					}
					elseif($_POST['valasz']=="papi"){
						echo "vesztettel<br>";
					}
					else {
						echo "döntetlen<br>";
					}
					break;
				}
			}
		}
			echo "Válassz egyet:";
			echo "<form name=ko method=post action=>\n\n";
			echo "Kő<input type=radio name=valasz value=ko><br>";
			echo "Papír<input type=radio name=valasz value=papir><br>";
			echo "Olló<input type=radio name=valasz value=ollo><br>";
			echo "<input type=submit name=gomb value=mehet>\n";
			echo "</form> <br>";
?>