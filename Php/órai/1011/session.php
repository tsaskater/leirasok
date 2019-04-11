<?php
	session_start();
	include_once("head.inc.php");
	fejlec("SESSION metódus",3);
	$_SESSION['valtozo']="bármi kerülhet ide";
	echo "történt valami?"
	 
?>