<?php
	$szoveg[]=file("szoveg.txt");
	$ssz=0;
	$szsz=0;
	$psz=0;
	$asz=0;
	foreach($szoveg as $sor)
	foreach($sor as $sz){
		$ssz++;
		$szavak=explode(' ',$sz);
		$szsz=$szsz+SizeOf($szavak);
		for($i=0;$i<SizeOF($szavak);$i++){
			if(strlen($szavak[$i])%2==0)
				$psz++;
			if($szavak[$i]=="a")
				$asz++;
			/*$betuk=str_split($szavak[$i]);
			for($y=0;$y<SizeOF($betuk);$y++){
				if($betuk[$y]=="a")
					$asz++;
			}*/
		}
		
			
	}
	echo "Sorok száma: $ssz <br>\n";
	echo "Szavak száma: $szsz <br>\n";
	echo "Páros szavak száma: $psz <br>\n";
	echo "'a' betűk száma: $asz <br>\n";
?>