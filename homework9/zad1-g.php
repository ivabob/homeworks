<?php
$conn = mysqli_connect('localhost', 'root', '', 'vratsa_dlopia');
$race="UPDATE `magics` SET date_deleted = 'date()' WHERE required_experience < 35";
$result = mysqli_query($conn, $race);

?>
