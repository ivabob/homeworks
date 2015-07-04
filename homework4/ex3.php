<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>color text</title>
</head>
<body>
<h3>Въведете произволен текст:</h3>
<form action="ex3.php" method="post">
	<input type="text" name="words" value="words">
	<input type="submit" name="submit" value="запиши">
</form>
<?php
$words = ($_POST['words']);
$arr = explode(" ", $words);
 	foreach ($arr as $key => $value) {
 		if ($key % 2) {
 			echo '<span style="color: red">' . $value . ' </span>';
 		}
 		    echo '<span style="color: green">' . $value . ' </span>';
 	}
?>
</body>
</html>
