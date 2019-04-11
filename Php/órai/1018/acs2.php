<?php
	include_once("head.inc.php");
	fejlec("Három link",3);
	echo "<form method = 'get'>\n";
	echo "A <a href='acs2.php?v=negy'> négyzet.</a><br>\n";
	echo "A <a href='acs2.php?v=kor'> kör.</a><br>\n";
	echo "A <a href='acs2.php?v=har'> háromszög.</a><br>";
	echo "</form>\n";
	 if(isset($_GET['v'])){
		 if($_GET['v']=="kor"){
			 echo "K=2r*pi T=r^2pi";
		 }
		  if($_GET['v']=="negy"){
			 echo "K=4*a T=a^2";
		 }
		 if($_GET['v']=="har"){
			 echo "K=a+b+c T=(a*ma)/2";
		 }
			 
	 }
?>