<?php
function regularPolygon($img,$x,$y,$radius,$sides,$color)
{
    $points = array();
    for($a = 0;$a <= 360; $a += 360/$sides)
    {
        $points[] = $x + $radius * cos(deg2rad($a));
        $points[] = $y + $radius * sin(deg2rad($a));
    }
    return imagepolygon($img,$points,$sides,$color);
}

	if(isset($_POST['gomb'])){
		$img = imagecreatetruecolor(1360,768);
		$szog=$_POST['szog'];
		$tav=$_POST['tav'];
		
		regularPolygon($img,1360/2,768/2,$tav,$szog,0xffffff);//Test draw
		header('Content-type: image/png');
		imagepng($img);
		
	}
	else{
	echo "<form name=post method=post action=>\n<table>\n";
	echo "<tr><td>Szög:<td><input type=number name=szog>";
	echo "<tr><td>Távolság:<td><input type=number name=tav>";
	echo "<tr><td colspan=2 align=center><input type=submit name=gomb value=Mehet>\n</table></form>";
	}
?>