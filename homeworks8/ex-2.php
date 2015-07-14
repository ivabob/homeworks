<?php
$n = 0;
function num($x, $y) {
	$n = $x*$y;
	if ($n%2==0) {
		echo "The result is:". $n ."even number";
	} else {
		echo "The result is:". $n ."not an even number ";
	}
	echo "<br/>";
}

num (5,6);
num(6,8);
num(12,15);
?>
