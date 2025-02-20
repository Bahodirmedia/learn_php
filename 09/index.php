<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Learn PHP 8 - Lesson 9</title>
</head>

<body>
	<?php
	
	// $a = 2 + 3 * 5; // 17
	// var_dump($a);
	
	// $b = (2 + 3) * 5; // 25
	// var_dump($b);
	
	// $c = 2;
	// $c = $c + 3; // 5
	// $c += 3; // 5
	// var_dump($c);
	
	// $d = 20;
	// $d %= 3; // 2
	// var_dump($d);
	
	// $a = 3;
	// $b = $a;
	// var_dump($a, $b);
	
	// $a = 5;
	// var_dump($a, $b);
	
	
	$a = 3;
	$b =& $a;
	var_dump($a, $b);
	
	$a = 5;
	var_dump($a, $b);
	
	?>

</body>

</html>