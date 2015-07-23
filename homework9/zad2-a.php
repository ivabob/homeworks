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

<?php
$conn = mysqli_connect('localhost', 'root', '', 'vratsa_dlopia');
$dlops="SELECT * from dlops WHERE date_deleted IS NULL";
$res = mysqli_query($conn, $dlops);
echo "<table class='table table-striped'>";
if (mysqli_num_rows($res) > 0) {
	while ( $row = mysqli_fetch_assoc($res)) {
		echo "<tr>";
		echo "<td> $row[id]</td>";
		echo "<td> $row[first_name] </td>";
		echo "<td> $row[last_name] </td>";
		echo "<td> $row[race] </td>";
		echo "<td> $row[gender] </td>";
		echo "<td> $row[date_of_birth]</td>";
		echo "<td> $row[weight] </td>";
		echo "<td> $row[status] </td>";
		echo "<td> <a href='zad2-c.php'><button class='btn btn-large btn-warning' type='button'> Update </button> </a> </td>";
		echo "<td> <a href='zad2-d.php'><button class='btn btn-large btn-primary' type='button'> Delete </button></a> </td>";
	}
}

echo "</table>";
echo "<a href='zad2-b.php' class='col-xs-6 col-xs-offset-5'><button class='btn btn-warning' type='button' offset>  Add Dlop  </button></a>";

?>

</body>
</html>
