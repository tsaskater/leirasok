<?php
	include_once("head.inc.php");
	fejlec("GET metódus",3);
	 echo "ez egy html szöveg<a href=yea.php?uzi=kabbeee>Katt</a><br>\n";
	 if(isset($_GET['uzi'])){
		 $aaa=$_GET['uzi'];
		 echo "$aaa<br>\n";
	 }
?>