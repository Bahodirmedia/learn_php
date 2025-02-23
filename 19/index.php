<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Learn PHP 8 - Lesson 19</title>
</head>

<body>

	<h1>Операторы continue и break</h1>

	<?php
	
	// Continue
	$i = 1;

	while ($i < 10) {
		if ($i % 2 != 0) {
			$i++;
			continue;
		}
		echo $i . "<br>";
		$i++;
	}
	
	echo "<br>";
	
	for ($j = 1; $j <= 20; $j++) {
		if (!($j % 2)) {
			continue;
		}
		echo $j . "<br>";
	};
	
	echo "<br>";
	
	echo "<table border='1' width='100%'>";
		for ($tr = 1; $tr <= 10; $tr++) {
			echo "<tr>";
			for ($td = 1; $td <= 10; $td++) {
				if ($td == 5) {
					continue 2;
				}
				echo "<td>$td</td>";
			}
			echo "</tr>";
		}
	
	// Break
	
	echo "<br>";
	
	while (true) {
		echo "$i<br>";
		if ($i == 10) {
			echo "Цикл завершен";
			break;
		}
		$i++;
	}
	
	?>

</body>

</html>