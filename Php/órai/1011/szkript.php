<?php
	include_once("head.inc.php");
	fejlec("Post metódus",3);
	
	if(isset($_POST['valami'])){
		$x=$_POST['valami'];
		for($i=0;$i<$_POST['szor'];$i++){
			echo "$x<br>\n";
		}
	}
	else{	
	echo "<form name=proba method=post action= >\n";
	echo "<input type=text name=valami><input type=number name=szor value=2>\n";
	echo "<input type=submit value=megy name=gomb>";
	echo "</form>\n";	
	}
?>