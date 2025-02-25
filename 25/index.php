<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Learn PHP 8 - Lesson 25</title>
</head>

<body>

	<h1>Пользовательские функции. Часть 2</h1>

	<?php
	
	// function sum($a, $b, ...$nums)
	// {	
	// 	$res = $a * $b;
	// 	foreach ($nums as $num) {
	// 		$res += $num;
	// 	}
	// 	echo $res; 
	// }
	
	// sum(1, 2, 3, 4, 5);
	
	// function test() {
	// 	static $a = 0;
	// 	echo $a;
	// 	$a++;
	// }
	
	// test();
	// test();
	// test();
	
	// function sum(int $a, int $b, int $c)
	// {
	// 	return $a + $b + $c;
	//	echo 'test'; // Недостижимый код
	// }
	
	// echo $res = sum(1, 2.7, 3);
	
	// function test(){
		
	// }
	
	// var_dump(test());
	
	
	// function sum($a, $b, $c): float
	// {
	// 	return $a + $b + $c;
	// }
	
	// echo sum(1, 2.7, 3);
	
	function sum($term1, $term2 = 1, $factor = 2)
	{
		return ($term1 + $term2) * $factor;
		
	}
	
	echo sum(factor: 3, term1: 1, term2: 2);
?>

</body>

</html>