<?php
	session_start();
	include_once("head.inc.php");
	fejlec("Van-nincs oldal",3);
	echo "alaprész...<br>\n";
	if(isset($_SESSION['valtozo'])){
		echo "A session értéke:$_SESSION[valtozo]<br>\n";
	}
	echo "Vége rész.<br>\n";
	
	 
?>