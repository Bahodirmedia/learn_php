<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Learn PHP 8 - Lesson 17</title>
</head>

<body>

	<h1>Цикл for</h1>

	<?php
	
		// for ($i = 1; $i <= 10; $i++) {
		// 	echo $i . "<br>";
		// }
		
		// for ($j = 20; $j >= 1; $j--) {
		// 	echo $j . "<br>";
		// }
		echo "<select>";
		for ($year=1990; $year <= 2024; $year++) { 
			echo "<option value='{$year}'>" . $year . "</option>";
		$year++;
		}
		echo "</select>";
		
		echo "<table border='1' width='100%'>";
		for ($tr = 1; $tr <= 10; $tr++) {
			echo "<tr>";
			for ($td = 1; $td <= 10; $td++) {
				echo "<td>$td * $tr = " . $td * $tr . "</td>";
			}
			echo "</tr>";
		}
	?>

</body>

</html>