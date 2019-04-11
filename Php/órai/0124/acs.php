<?php
	include_once('head.inc.php');
	if(isset($_POST['gomb'])){
		dbkapcs();
		$query=mysqli_query($kapcs, "SELECT * FROM adatok WHERE nev='malacka'");
		if(mysqli_affected_rows($kapcs)==1){
			$sor=mysqli_fetch_assoc($query);
			$jelsz=MD5($_POST['jelszo']);
			if($jelsz == $sor['pass']){
				session_start();
				$_SESSION['nev']=$sor['nev'];
				$_SESSION['szint']=$sor['szint'];
				header("location:vedett.php");
			}
		}
	}
	fejlec('Adatelérés',3);
	echo "<form name=beker method=post action=>\n<table>\n";
	echo "<tr><td>Felhasználó név<td><input type=text name=nev>";
	echo "<tr><td>Jelszó<td><input type=password name=jelszo>";
	echo "<tr><td colspan=2 align=center><input type=submit name=gomb value=Belépés>\n</table></form>";
	
	
	
?>