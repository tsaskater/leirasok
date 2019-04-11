<?php
function fejlec($t,$s){
	echo "<html>\n<head>\n<META http-equiv='Content-Type' content='text/html'; charset='UTF-8'>";
    echo "<LINK REL='stylesheet' TYPE='text/css' HREF='tart1.css'>";
	echo "<title>$t</title>\n</head>\n<body>\n<body>\n</html>"; 
}

function dbkapcs(){
	$host="localhost";
	$user="test";
	$pass="";
	$db="test";
	global $kapcs;
	$kapcs=mysqli_connect($host, $user, $pass) or die("Adatbázis hiba!!!");
	mysqli_select_db($kapcs, $db);
	mysqli_query($kapcs,"SET NAMES utf8");
	return $kapcs;
}
?>