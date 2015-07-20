<?php
$conn = mysqli_connect('localhost', 'root', '', 'vratsa_dlopia');
$race="UPDATE `dlops` SET `weight`= weight + 5 WHERE gender = 'male'";
$result = mysqli_query($conn, $race);

?>
