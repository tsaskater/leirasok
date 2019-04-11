<?php
	session_start();
	if($_SESSION['szint']>0){
			include_once('head.inc.php');
			fejlec('Jelszó Váltas',3);
		if(isset($_POST['gomb'])){
			dbkapcs();
			$query=mysqli_query($kapcs, "SELECT * FROM adatok WHERE nev='malacka'");
			if(mysqli_affected_rows($kapcs)==1){
				$sor=mysqli_fetch_assoc($query);
				$jelsz=MD5($_POST['rjelszo']);
				if($jelsz == $sor['pass']){
					if($_POST['u1jelszo']==$_POST['u2jelszo']){
						$ujpass=MD5($_POST['u1jelszo']);
						$query=mysqli_query($kapcs, "UPDATE adatok SET pass='$ujpass' WHERE nev='$_SESSION[nev]'");
						if(mysqli_affected_rows($kapcs)==1)
							echo "minden ok<br>\n";
						else
							echo "khmm";
						echo "<a href=acs.php>Vissza</a>\n";
					}
				}
			}
		}
		else{
			echo "Add meg a régi majd az új jelszavadat:";
			echo "<form name=jelsz method=post action=>\n<table>\n";
			echo "<tr><td>Régi jelszó<td><input type=password name=rjelszo>";
			echo "<tr><td>Új jelszó<td><input type=password name=u1jelszo>";
			echo "<tr><td>Új jelszó<td><input type=password name=u2jelszo>";
			echo "<tr><td colspan=2><input type=submit name=gomb value=JelszóCsere>\n";
			echo "</table>\n</form>";
			echo "<a href=vedett.php>Vissza</a>\n";
		}
	}
	else{
		header("location:acs.php");
	}
?>