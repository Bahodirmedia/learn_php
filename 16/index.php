<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Learn PHP 8 - Lesson 16</title>
</head>

<body>

	<h1>Домашнее задание</h1>

	<?php

	// Task 1

	echo "<select>";

	$year = 1990;
	while ($year <= 2021) {
		echo "<option value='{$year}'>" . $year . "</option>";
		$year++;
	}
	
	echo "</select>";
	
	
	// Task 2
	
	echo "<table border='1' width='100%'>";
	$tr = 1;
	while ($tr <= 10) {
		echo "<tr>";
		$td = 1;
		while ($td <= 10) {
			echo "<td>$td * $tr = " . $td * $tr . "</td>";
			$td++;
		}
		echo "</tr>";
		$tr++;
	}

	?>

</body>

</html>