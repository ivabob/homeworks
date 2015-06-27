<!DOCTYPE html>
<html>
   <head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
   <title> Possibilities </title>
   </head>
<body>
	<form action="task-1.php" method="get">
		<h3>Изберете вид </h3>
		<input type="radio" name="sort" value="concert">Концерт
		<input type="radio" name="sort" value="sport">Спорт
		<input type="radio" name="sort" value="movie">Филм
		<h3>Изберете място </h3>
		<select name="place">
			<option value="Vratsa">Враца</option>
			<option value="Sofia">София</option>
		</select>
		<input type="submit" value="Избери">	
	</form>
</body>
</html>
	<?php 
	if (!empty($_GET)) {
		$sort = $_GET['sort'];
		$place = $_GET['place'];
		if ($place == 'Sofia') {
			if ($sort == 'concert') {
				echo "<br />";
				echo "SAVOV & Mirela Live Piano Bar J'ADORE - 27 June 2015";
			}
			elseif ($sort == 'sport') {
				echo "<br />";
				echo "Wake Your Body – Активна събота, 27 June 2015";
			}
			elseif ($soort == 'movie') {
				echo "<br />";
				echo "Великата красота - Италия-Франция, 2013, 142 мин.Режисьор - Паоло СорентиноСценарий - Паоло Сорентино, Умберто КонтарелоОператор - Лука Бигаци";
			}
		}
		if ($place == 'Vratsa') {
			if ($sort == 'concert') {
				echo "<br />";
				echo "RockSchool LIVE @ Маймунарника | 28.06.15";
			}
			elseif ($sort == 'sport') {
				echo "<br />";
				echo "Национално състезание по картинг, 1-5 юни 2015 година.";
			}
			else {
				echo "<br />";
				echo "Няма събитие по посочените критерии!";
			}
		}
	}
	?>
