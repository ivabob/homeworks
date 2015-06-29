<?php
$numbers = array('N1' => 30, 'N2' => 5, 'N3' => 16, 'N4' => 48, 'N5' => 8, 'N6' => 15 );
$a = 1;
$max_v = $numbers['N1'];
$max_k = 'N1';
$min_v = $numbers['N1'];
$min_k = 'N1';
foreach ($numbers as $k => $v) {
	$a ++;

	if ($v > $max_v) {
		$max_v = $v;
		$max_k = $k;
	}
	elseif ($v < $min_v) {
		$min_v = $v;
		$min_k = $k;
	}
}
echo "The max number is: $max_k with value: $max_v";
unset($numbers[$max_k]);

//Now we should find the second max number
$min_v2 = $min_v;
$min_k2 = $min_k;
foreach ($numbers as $k => $v) {
	$a ++;
	if ($v > $min_v2) {
		$min_v2 = $v;
		$min_k2 = $k; 
	}
}
echo "<br/>";
echo "The next  max number is: $min_k2 with value: $min_v2";
?>
