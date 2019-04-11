<?php
	include_once("head.inc.php");
	fejlec("Téglalap számolás",3);
	echo "<form method = 'post'>\n";
	echo "a: <input type='number' name='a'>\n";
	echo "b: <input type='number' name='b'>\n";
	echo "<input type = 'submit' name = 'megy' value='gomb'><br>";
	echo "</form>\n";
	if(isset($_POST['megy'])){   
	$a = $_POST['a'];   
	$b = $_POST['b'];   
	$k = 2*($a+$b);
	$t = $a*$b;
	$at=  sqrt($a*$a*$b*$b);
	echo "A négyzet kerülete 2*($a + $b) = $k egység.<br>\n";
	echo "A négyzet területe $a * $b = $t egység.<br>\n";
	echo "A négyzet átlója √($a*$a*$b*$b) = $at egység.<br>\n";
	} 	
?>