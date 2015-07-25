<!DOCTYPE html>
<html>
<head>
  <title>Dlops</title>
  <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>
  <script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>
</head>
<body>

<?php
$conn = mysqli_connect('localhost', 'root', '', 'vratsa_dlopia');
if (!empty($_GET)) {	
$updatedlop = "SELECT * from dlops WHERE id = $_GET[id]";
$result = mysqli_query($conn, $updatedlop);
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
	echo"
	<form method='post' action='zad2-c.php'>
		<input  type='hidden' name='id' value='$row[id]'>
		<input  type='text' name='first_name' value='$row[first_name]'>
		<input  type='text' name='last_name' value='$row[last_name]'>
		<input  type='text' name='race' value='$row[race]'>
		<input  type='text' name='gender' value='$row[gender]'>
		<input  type='text' name='date_of_birth' value='$row[date_of_birth]'>
		<input  type='text' name='weight' value='$row[weight]'>
		<input  type='text' name='status' value='$row[status]'>
		<input  type='submit' name='submit' value='submit'>
	</form>";

	}
}
//$conn = mysqli_connect('localhost', 'root', '', 'vratsa_dlopia');
if (!empty($_POST)) {
$a = $_POST['first_name'];
$b = $_POST['last_name'];
$c = $_POST['race'];
$d = $_POST['gender'];
$e = $_POST['date_of_birth'];
$y = $_POST['weight'];
$x = $_POST['status'];
$t = $_POST['id'];
$updatedlop="UPDATE `dlops` SET `first_name`='$a',`last_name`='$b',`race`='$c',`gender`='d',`date_of_birth`='$e',`weight`='$y',`status`='$x' WHERE id = '$t'";
$result = mysqli_query($conn, $updatedlop);
}
?>
<a href='zad2-a.php' class='btn btn-link' type='button'> Back </a>
</body>
</html>
