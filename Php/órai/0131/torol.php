<?php
	session_start();
	if($_SESSION['szint']==1){
			include_once('head.inc.php');
			fejlec('Felhasználó törlés',3);
			dbkapcs();
			if(isset($_GET['nev'])){
				echo "<form name=torol method=post action=>\n";
				echo "<input type=hidden value=$_GET[nev] name=nev><br>\n";
				echo "<input type=submit name=gomb value=torles><br>\n";
				echo "</form>";
			}
			if(isset($_POST['gomb'])){
				$query=mysqli_query($kapcs, "DELETE FROM adatok WHERE nev='$_POST[nev]'");
				if(mysqli_affected_rows($kapcs)==1) echo "A $_POST[nev] törölve lett<br>";
			}
			else{
			$query=mysqli_query($kapcs, "SELECT * FROM adatok");
			echo "<table>\n";
			while($sor=mysqli_fetch_assoc($query)){
				echo "<tr>";
				foreach($sor as $kulcs => $elem){
					if($kulcs=="nev")
						echo "<td><a href=torol.php?nev=$elem>$elem</a>";
					else
						echo "<td>$elem";
				}
			}
			echo "</table><br>";
			}
			echo "<a href=vedett.php>Vissza</a>\n";
	}
	else{
		header("location:acs.php");
	}
?>