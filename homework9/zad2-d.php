<?php
$conn = mysqli_connect('localhost', 'root', '', 'vratsa_dlopia');
$deldlop="UPDATE `dlops` SET date_deleted = now() WHERE id = 6";
$result = mysqli_query($conn, $deldlop);
echo "<a href='zad2-a.php' class='btn btn-link' type='button'> Back </a>";
?>
