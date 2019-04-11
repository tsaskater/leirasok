<?php
	include_once("head.inc.php");
	fejlec("Feladat",3);
	if(isset($_POST['gomb4'])){
				 $k=$_POST['a']+$_POST['b']+$_POST['c'];
				 $t=$_POST['a']*$_POST['ma']/2;
				 echo "Kerület: $k <br>\n";
				 echo "Terület: $t <br>\n";
				echo "<a href=acs.php>Vissza az elejéhez</a><br>\n";
			 }
			else if(isset($_POST['gomb3'])){
						  $k=$_POST['a']*4;
						  $t=$_POST['a']*$_POST['a'];
						  echo "Kerület: $k <br>\n";
						  echo "Terület: $t <br>\n";
						echo "<a href=acs.php>Vissza az elejéhez</a><br>\n";
					  }
			else if(isset($_POST['gomb2'])){
				 $k=2*$_POST['r']*3.14;
				 $t=$_POST['r']*$_POST['r']*3.14;
				 echo "Kerület: $k <br>\n";
				 echo "Terület: $t <br>\n";
				 echo "<a href=acs.php>Vissza az elejéhez</a><br>\n";
			 }
			 else{
					if(isset($_POST['gomb1'])){
						 if($_POST['kör']=="be"){
							 echo "<form method = 'post'>\n";
							 echo "r: <input type='text' name='r'><br>\n";
							 echo "<input type = 'submit' name = 'gomb2' value='számol'><br>\n";
							 echo "</form>\n"; 
						}
						if(isset($_POST['négyzet'])){
							 echo "<form method = 'post'>\n";
							 echo "a: <input type='text' name='a'><br>\n";
							 echo "<input type = 'submit' name = 'gomb3' value='számol'><br>\n";
							 echo "</form>\n";
						}
						if(isset($_POST['háromszög'])){
							 echo "<form method = 'post'>\n";
							 echo "a: <input type='text' name='a'><br>\n";
							 echo "b: <input type='text' name='b'><br>\n";
							 echo "c: <input type='text' name='c'><br>\n";
							 echo "ma: <input type='text' name='ma'><br>\n";
							 echo "<input type = 'submit' name = 'gomb4' value='számol'><br>\n";
							 echo "</form>\n";			 
						}
					}		
					 else{
					 echo "<form method = 'post'>\n";
					echo "Kör: <input type='radio' name='kör' value='be'><br>\n";
					echo "Négyzet: <input type='radio' name='négyzet' value='be'><br>\n";
					echo "Háromszög: <input type='radio' name='háromszög' value='be'><br>\n";
					echo "<input type = 'submit' name = 'gomb1' value='megy'><br>\n";
					echo "</form>\n";
					 }
			 }
?>