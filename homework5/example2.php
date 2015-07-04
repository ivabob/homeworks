<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>simple number</title>
</head>
<body>
	<h3>Въведете произволно число:</h3>
	<form action="example2.php" method="post">
		<input type="text" name="num" value="num">
		<input type="submit" name="submit" value="въведи">
	</form>
<?php
$n = ($_POST['num']);
$br = 0;
 if ($n < 2 && $n > 0 && $n != 1) {
 	echo "Числото $n не е просто <br/>";
 }elseif ($n == 2) {
 		echo "числото $n е просто число <br/>";
 	}elseif ($n == 0) {
 		echo "Числото $n не е просто <br/>";
 	}elseif ($n == 1) {
 		echo "Числото $n не е нито просто нито съставно <br/>";
 	}else 	{
 for ($i= 2; $i<=$n; $i++) { 
 	if (($n % $i) == 0) {
 		 $br++;		
 	     if ($br > 2) {
 		echo "Числото $n не е просто <br/>";
 			}
 		}
	}
}
echo "Числото $n е просто число <br/>";
?>
</body>
</html>
