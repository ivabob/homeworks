<?php
$dlop_id = $_GET['id'];

$conn = mysqli_connect('localhost', 'root', '', 'vratsa_dlopia');
$deldlop="UPDATE `dlops` SET date_deleted = now() WHERE id = $dlop_id";
$result = mysqli_query($conn, $deldlop);
echo "<a href='zad2-a.php' class='btn btn-link' type='button'> Back </a>";
?>
