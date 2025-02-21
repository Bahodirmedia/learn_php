<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Learn PHP 8 - Lesson 10</title>
</head>

<body>
	
	<?php
	
		var_dump(3 == 3); // true
		var_dump(3 === '3'); // false
		var_dump(2 != 3); // true
		var_dump(2 <> 3); // true
		var_dump(2 != '3'); // true
		var_dump('3' !== '3'); // false
		var_dump(3 !== '3'); // true

		var_dump(2 > 3); // false
		var_dump(2 >= 3); // false
		var_dump(2 < 3); // true
		var_dump(2 <= 3); // true
		
		// Spaceship operator
		var_dump(2 <=> 3); // -1
		var_dump(3 <=> 3); // 0
		var_dump(3 <=> 2); // 1
		
		$a = 2;
		var_dump($a++); // 2
		// $a +=1;
		// $a++;
		// $a = $a + 1;
		var_dump($a); // 3
		
		$b = 2;
		var_dump(++$b); // 3
		// $b++;
		// $b += 1;
		// $b = $b + 1;
		var_dump($b); // 3
		
		$c = 2;
		var_dump($c--); // 2
		// $c -= 1;
		// $c--;
		// $c = $c - 1;
		var_dump($c); // 1
		
		$d = 2;
		var_dump(--$d); // 1
		// $d -= 1;
		// $d--;
		// $d = $d - 1;
		var_dump($d); // 1
	?>

</body>

</html>