<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>PHP cycle FOR 1</title>
</head>
<body>
	<h3>Въведете две числа:</h3>
	<form action="example1.php" method="post">
		<input type="text" name="x" value="x">
		<input type="text" name="y" value="y">
		<input type="submit" name="submit" value="въведи">
	</form>
<?php
$x = $_POST['x'];
$y = $_POST['y'];
	if ($x < $y) {
		for ($i=$x; $i <= $y ; $i++) { 
			if ($i % 3 == 0) {
				echo "$i, ";
			}elseif ($i % 7 == 0){
				echo "$i, ";
			}
		}
	}elseif ($y < $x) {
		for ($j=$y; $j <= $x ; $j++) { 
			if ($j % 3 == 0) {
				echo "$j, ";
			}elseif ($j % 7 == 0) {
				echo "$j, ";
			}
		}
	}

?>
</body>
</html>
