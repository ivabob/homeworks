<?php
$br = 0;
echo '<table border="1">';
for ($i=1; $i <= 10  ; $i++) { 
	$br++;
	echo "<tr>";
	for ($j=1; $j <= $br ; $j++) { 
		$m = $i*$j;	
		$n = 10 - $br;
		echo '<td colspan="$n">';
		echo "$i*$j = $m";
		echo "</td>";
		}
		echo "</tr>";
}
echo "</table>";
?>
