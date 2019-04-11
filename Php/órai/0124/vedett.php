<?php
	session_start();
	if($_SESSION['szint']>0){
			include_once('head.inc.php');
			fejlec('Védett',3);
			echo "<h1>Szia Kedves $_SESSION[nev]</h1><br>";
			switch ($_SESSION['szint']){
				case 1:{
					echo "root";
					//break;
				}
				case 2:{
					echo "operátor";
					//break;
				}
				case 3:{
					echo "user<br>";
					//break;
				}
			}
			echo "<br><a href=kilep.php><h2>Kilépés</h2></a>";
			echo "<br><a href=jelszovalt.php><h2>Jelszó váltás</h2></a>";
			
	}
	else{
		header("location:acs.php");
	}
	
	
	
	
?>