<?php
$x=$_POST['x'];
$y=$_POST['y'];
$a = 1;
if ($x < $y) {
	while ( $x < $y) {
		$x = $x +1;
		echo "$x,";
	}
}
    elseif ($y < $x) {
    	while ($y < $x) {
    		$y = $y + 1;
    	    echo "$y,";
    }
  }

?>
<!DOCTYPE html>
<html>
<head>
	<title>exercise 2</title>
</head>
<body>
<form method="post" action="ex2.php">
	<input type="text" name="x" />
	<input type="text" name="y" />
	<input type="submit" name="send" value="applay">
</form>
</body>
</html>
