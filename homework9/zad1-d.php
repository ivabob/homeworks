<!DOCTYPE html>
<html>
<head>
	<title>new row</title>
</head>
<body>
<form method="post" action="zad1-d.php">
	<input type="text" name="race" value="race">
	<input type="text" name="superpower" value="superpower">
	<input type="text" name="water_coef" value="water_coef">
	<input type="text" name="sun_coef" value="sun_coef">
	<input type="text" name="population" value="population">
	<input type="submit" name="submit" value="submit">
</form>


<?php
$conn = mysqli_connect('localhost', 'root', '', 'vratsa_dlopia');
$a = $_POST["race"];
$b = $_POST["superpower"];
$c = $_POST["water_coef"];
$d = $_POST["sun_coef"];
$e = $_POST["population"];
$race="INSERT INTO `vratsa_dlopia`.`races` (`race`, `type`, `superpower`, `water_coef`, `sun_coef`, `population`) VALUES ('$a', 'bush', '$b', '$c', '$d', '$e')";
$result = mysqli_query($conn, $race);

?>

</body>
</html>
