<?php
	$host="localhost";
	$user="test";
	$pass="";
	$db="test";
	global $kapcs;
	$kapcs=mysqli_connect($host, $user, $pass) or die("Adatbázis hiba!!!");
	mysqli_select_db($kapcs, $db);
	mysqli_query($kapcs,"SET NAMES utf8");
	
	$query=mysqli_query($kapcs, "SELECT * FROM adatok");
	$sor=mysqli_fetch_assoc($query);
	foreach($sor as $elem)
		echo "$elem <br>\n";
?>
