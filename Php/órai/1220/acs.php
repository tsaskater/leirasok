<?php
	$szoveg[]=file("jegyek.txt");
	$esz=0;
	$bukas=0;
	$temp=0;
	$osz=0;
	$o=0;
	foreach($szoveg as $sor)
	foreach($sor as $sz){
		$elemek=explode(chr(9),$sz);
		echo"<tr>";
		$o=SizeOf($elemek);
		for($i=0;$i<$o;$i++){	
			$tomb[$esz][$i]=$elemek[$i];
		}
		$esz++;
	}
	echo "<br>";
	$atlag[0]="Átlag";
		for($i=1;$i<$esz;$i++){
			for($y=1;$y<$o;$y++){
				$temp=$temp+(int)$tomb[$i][$y];	
				if((int)$tomb[$i][$y]==1)
					$bukas++;
			}
			$osz=$osz+$temp;
			
			$atlag[$i]=$temp/($o-1);
			$temp=0;
		}
	echo "<table>";	
	for($i=0;$i<$esz;$i++){
		echo "<tr>";
		for($y=0;$y<$o;$y++){
			echo "<td>".$tomb[$i][$y]."</td>";
		}
		echo "<td>".$atlag[$i]."</td>";
		echo "</tr>";
	}
		$oatlag=$osz/(($o-1)*($esz-1));
		echo "<tr><td> Az osztály átlag:</td><td>".$oatlag." </td></tr>";		
		echo "<tr><td> Bukások száma:</td><td>".$bukas."</td></tr>";		
	echo "</table>";

?>