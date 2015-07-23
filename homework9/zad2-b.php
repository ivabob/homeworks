<!DOCTYPE html>
<html>
<head>
  <title>Dlops</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>

<form method="post" action="zad2-b.php">
	<input type="text" name="first_name" value="first_name">
	<input type="text" name="last_name" value="last_name">
	<input type="text" name="race" value="race">
	<input type="text" name="gender" value="gender">
	<input type="text" name="date_of_birth" value="date_of_birth">
	<input type="text" name="weight" value="weight">
	<input type="text" name="status" value="status">
	<input type="submit" name="submit" value="submit">
</form>
<?php

function adddlop(){
$conn = mysqli_connect('localhost', 'root', '', 'vratsa_dlopia');
if (!empty($_POST)) {
$a = $_POST["first_name"];
$b = $_POST["last_name"];
$c = $_POST["race"];
$d = $_POST["gender"];
$e = $_POST["date_of_birth"];
$y = $_POST["weight"];
$x = $_POST["status"];
$newdlop="INSERT INTO `vratsa_dlopia`.`dlops` (`first_name`, `last_name`, `race`, `gender`, `date_of_birth`, `weight`, `status`) VALUES ('$a', '$b', '$c', '$d', '$e', '$y', '$x')";
$res = mysqli_query($conn, $newdlop);
	}
}
adddlop();
?>
<a href='zad2-a.php' class="btn btn-link" type='button'> Back </a>
</body>
</html>
