<?php
	session_start();
	include_once('head.inc.php');
	fejlec('Kilepes',3);
	$_SESSION['szint']=0;
	$_SESSION['nev']=0;
	session_destroy();	
	header("location:acs.php");
?>