<?php
	session_start();
	if($_SESSION['szint']==1){
			include_once('head.inc.php');
			fejlec('Másnak jelszó Váltas',3);
			dbkapcs();
			if(isset($_GET['nev'])){
				echo "Add meg $_GET[nev] új jelszavát:<br>\n";
				echo "<form name=jelsz method=post action=>\n";
				echo "<input type=hidden value=$_GET[nev] name=nev><br>\n";
				echo "<input type=password name=jelszo><br>\n";
				echo "<input type=submit name=gomb value=JelszóCsere><br>\n";
				echo "</form>";
			}
			if(isset($_POST['gomb'])){
				$ujpass=MD5($_POST['jelszo']);
				$query=mysqli_query($kapcs, "UPDATE adatok SET pass='$ujpass' WHERE nev='$_POST[nev]'");
				if(mysqli_affected_rows($kapcs)==1) echo "minden ok<br>";
			}
			else{
			$query=mysqli_query($kapcs, "SELECT * FROM adatok");
			echo "<table>\n";
			while($sor=mysqli_fetch_assoc($query)){
				echo "<tr>";
				foreach($sor as $kulcs => $elem){
					if($kulcs=="nev")
						echo "<td><a href=masjelszovalt.php?nev=$elem>$elem</a>";
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