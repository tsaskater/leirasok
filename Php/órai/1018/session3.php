<?php
	session_start();
	include_once("head.inc.php");
	fejlec("Session vége",3);
	session_destroy();
	echo "Itt a session vége";
	
	
	 
?>