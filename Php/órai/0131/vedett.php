<?php
	session_start();
	if($_SESSION['szint']>0){
			include_once('head.inc.php');
			fejlec('Védett',3);
			echo "<h1>Szia Kedves $_SESSION[nev]</h1><br>";
			switch ($_SESSION['szint']){
				case 1:{
					echo "root<br>";
					echo "<br><a href=masjelszovalt.php><h2>Más felhasználó jelszó váltás</h2></a><br>";
					echo "<br><a href=torol.php><h2>Felhasználó törlés</h2></a><br>";
					//break;
				}
				case 2:{
					echo "operátor<br>";
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