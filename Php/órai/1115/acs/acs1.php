<?php
	session_start();
	include_once("head.inc.php");
	fejlec("Borászat",3);
	$_SESSION['sz']=0;
	if(isset($_POST['megy'])){  
		if($_SESSION['ossz']!=NULL){
			$ossz=$_SESSION['ossz'];;
			foreach($ossz as $elem){
				echo "$elem[ev] $elem[me]<br>\n";
			}
		}
		if($_POST['ev']!=""){
			$elem['ev']=$_POST['ev'];
			$elem['me']=$_POST['me'];
			$ossz[]=$elem;
			$_SESSION['ossz']=$ossz;
			echo "$elem[ev] $elem[me]<br>\n";
		}
		else{
			$min=0;
			$ossz=$_SESSION['ossz'];
			for($i=1;$i<SizeOf($ossz);$i++)
			{
				if($ossz[$i]['me']<$ossz[$min]['me']){
					$min=$i;
			}
			}
			echo  $ossz[$min]['ev'] .". évben volt a legkevesebb bor mennyiség.";
		}
		
	}
		echo "<form method = 'post'>\n";
		echo "Évszám: <input type='number' name='ev'>\n";
		echo "Mennyiség: <input type='number' name='me'>\n";
		echo "<input type = 'submit' name = 'megy' value='gomb'><br>";
		echo "</form>\n";
?>