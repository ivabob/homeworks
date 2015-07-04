<!DOCTYPE html>
<html>
<head>
	<title>cyrcle</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
     <h3>Въведете координати за произволна точка:</h3>
     <form action="" method="post">
     	<input type="text" name="x" value="x">
     	<input type="text" name="y" value="y">
     	<input type="submit" name="submit" value="submit">
     </form>
<?php
$x0 = 0;
$y0 = 0;
$r = 2;
$x = (!empty($_POST['x']));
$y = (!empty($_POST['y']));
$s = sqrt(($x0 - $x) * ($x0 - $x) + ($y0 - $y) * ($y0 - $y));
   if ($s < $r){
   		echo "Точката е в кръга";
   	} 
   	elseif ($s == $r){
   		echo "Точката е на кръга";
   	} 
   	else {
   	 echo "Точката е извън кръга";
   	}
   
  ?>
</body>
</html>
