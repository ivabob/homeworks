<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>simple number</title>
</head>
<body>
	<h3>Въведете произволни числа:</h3>
	<form action="example3.php" method="post">
		<input type="text" name="num" value="num">
		<input type="text" name="num1" value="num1">
		<input type="submit" name="submit" value="въведи">
	</form>
<?php
$n = ($_POST['num']);
$m = ($_POST['num1']);
echo '<table border="1">';
for ($i=1; $i <= $m  ; $i++) { 
	echo "<tr>";
	for ($j=1; $j <= $n ; $j++) { 
		echo "<td> $i,$j ";
		echo "</td>";
	}
	echo "</tr>";
}
echo "</table>";
?>
</body>
</html>
