<?php
$conn = mysqli_connect('localhost', 'root', '', 'vratsa_dlopia');
$race="SELECT * FROM `magics` WHERE date_deleted IS NULL";
$res = mysqli_query($conn, $race);
echo "<table border=solid>";
if (mysqli_num_rows($res) > 0) {
	while ( $row = mysqli_fetch_assoc($res)) {
		echo "<tr>";
		echo "<td> $row[id]</td>";
		echo "<td> $row[magic] </td>";
		echo "<td> $row[words] </br>";
		echo "<td> $row[feeling] </br>";
		echo "<td> $row[effort] </br>";
	}
}
echo "</table>";

?>
