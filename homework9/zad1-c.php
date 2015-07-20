<?php
$conn = mysqli_connect('localhost', 'root', '', 'vratsa_dlopia');
$race="SELECT * FROM magics WHERE magic LIKE '%ur%' OR '%oc%'";
$result = mysqli_query($conn, $race);
echo "<table border=solid>";
if (mysqli_num_rows($result) > 0) {
	while ( $row = mysqli_fetch_assoc($result)) {
		echo "<tr>";
		echo "<td> $row[id]</td>";
		echo "<td> $row[magic] </td>";
		echo "<td> $row[words] </br>";
		echo "<td> $row[feeling] </br>";
		echo "<td> $row[effort] </br>";
		echo "<td> $row[possibility] </br>";
		echo "<td> $row[required_experience] </br>";
	}
}
echo "</table>";
?>
