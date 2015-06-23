<?php
$a=6;
$b=3;
$c=9;
if ($a < $b && $a < $c && $b < $c){echo "$a, $b, $c";}
	elseif ($a < $b && $a < $c && $b < $c){echo "$a, $b, $c";}
	elseif ($a > $b && $a > $c && $b > $c){echo "$c, $b, $a";}
	elseif ($a > $b && $a < $c && $b < $c){echo "$b, $a, $c";}
	elseif ($a < $b && $a < $c && $b > $c){echo "$a, $c, $b";}
	elseif ($b < $a && $b < $c && $a < $c){echo "$b, $a, $c";}
?>
