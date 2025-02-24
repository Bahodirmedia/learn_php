<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Learn PHP 8 - Lesson 20</title>
</head>

<body>

	<h1>Выражение match</h1>

	<?php
		$i = 7;
		
		// match expression
		
		// $res = match ($i) {
		// 	1 => "One",
		// 	2 => "Two",
		// 	3 => "Three",
		// 	4 => "Four",
		// 	5 => "Five",
		// };
		
		// $res = match ($i) {
		// 	1, 2, 3 => "Var < 4",
		// 	4 => "Four",
		// 	5 => "Five",
		// 	default => "Var > 4",
		// };
		
		$grade = 10;
		$res = match (true) {
			($grade >= 8) && ($grade < 10)  => "Good",
			($grade >= 10) && ($grade < 13) => "Excellent",
			($grade >= 6) && ($grade < 7)  => "Satisfactory",
			default => "Unsatisfactory",
		};
		
		echo $res;
	?>

</body>

</html>