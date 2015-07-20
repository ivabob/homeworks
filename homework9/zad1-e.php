<?php
$conn = mysqli_connect('localhost', 'root', '', 'vratsa_dlopia');
$race="UPDATE `races` SET `population`= (population + (population * 0.05)) WHERE sun_coef > 60";
$result = mysqli_query($conn, $race);

?>
