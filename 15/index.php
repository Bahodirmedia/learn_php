<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Learn PHP 8 - Lesson 15</title>
</head>

<body>

	<h1>Цикл while</h1>

	<?php
	// $i = 1;

	// while ($i < 10) {
	// 	echo $i . "<br>";
	// 	$i++;
	// }

	echo "<table border='1' width='100%'>";
	$tr = 1;
	while ($tr <= 10) {
		echo "<tr>";
		$td = 1;
		while ($td <= 20) {
			echo "<td>" . $td * $tr . "</td>";
			$td++;
		}
		echo "</tr>";
		$tr++;
	}
	echo "</table>";

	// $i = 11;

	// while ($i < 10) {
	// 	echo $i . "<br>";
	// 	$i++;
	// }
	
	
	// Do while
	
	$i = 11;
	
	do {
		echo $i . "<br>";
		$i++;
	} while ($i < 10); // 11 < 10 false
	
	?>

</body>

</html>