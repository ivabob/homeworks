<html>
     <head>
     <title>learn</title>
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
     </head>
  <body>
       <form method="post" action="learn3.php">
       Въведи първо число: <input type="text" name="num1" value="num1">
       Въведи второ число: <input type="text" name="num2" value="num2">
       <input type="submit" name="submit" value="submit">
       </form>  
<?php
$a = ($_POST['num1']);
$b = ($_POST['num2']);
$c = $a * $b;
   if (($c%2) == 0)  {
	echo "произведението е четно число";
   }
    else {
    	echo "произведението е нечетно число";
    }
?>
</body>
</html>
