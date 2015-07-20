<?php
$conn = mysqli_connect('localhost', 'root', '', 'vratsa_dlopia');
$race="SELECT * from races WHERE type = 'tree' AND sun_coef > 50 ";
$res = mysqli_query($conn, $race);
echo "<table border=solid>";
if (mysqli_num_rows($res) > 0) {
	while ( $row = mysqli_fetch_assoc($res)) {
		echo "<tr>";
		echo "<td> $row[race]</td>";
		echo "<td> $row[type] </td>";
		echo "<td> $row[superpower] </br>";
		echo "<td> $row[water_coef] </br>";
		echo "<td> $row[sun_coef] </br>";
	}
}
echo "</table>";

?>
