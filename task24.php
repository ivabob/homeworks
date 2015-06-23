<?php
$a=5;
$b=-8;
$c=$a+$b;
if ($a > 0 && $b > 0){echo "Sborat na chislata e polojitelno chislo";}
   elseif ($a < 0 && $b < 0){echo "Sborat na chislata e otricatelno chislo";}
	elseif ($a > 0 && $b < 0 )
		if ((abs($b)) > $a){echo "Sborat na chislata e otricatelno chislo";}
	else {echo "Sborat na chislata e otricatelno chislo";}
?>
