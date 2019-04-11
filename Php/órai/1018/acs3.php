<?php
	include_once("head.inc.php");
	fejlec("Checkbox",3);
	echo "<form method = 'post'>\n";
	echo "Kör: <input type='checkbox' name='a' value='be'><br>\n";
	echo "Négyzet: <input type='checkbox' name='b' value='be'><br>\n";
	echo "Háromszög: <input type='checkbox' name='c' value='be'><br>\n";
	echo "<input type = 'submit' name = 'megy' value='gomb'><br>\n";
	echo "</form>\n";
	
	if(isset($_POST['megy'])){
		if(isset($_POST['a'])){
		 if($_POST['a']=="be"){
			 echo "Kör: K=2r*pi T=r^2pi<br>\n";
		 }
		}
		if(isset($_POST['b'])){
		  if($_POST['b']=="be"){
			 echo "Négyzet: K=4*a T=a^2<br>\n";
		 }
		}
		if(isset($_POST['c'])){
		 if($_POST['c']=="be"){
			 echo "Háromszög: K=a+b+c T=(a*ma)/2<br>\n";
		 }
		}			 
	 }
?>