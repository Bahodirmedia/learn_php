<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Learn PHP 8 - Lesson 21</title>
</head>

<body>

	<h1>Массивы</h1>

	<?php
		// Arrays
		
		// $arr1 = array(1, 2, 3, 4, 5);
		// $arr2 = [1, 2, 3, 4, 5];
		
		$arr1 = ['John', 'Doe', 33, 'New York'];
		
		$arr1[] = 'USA';
		$arr1[] = 7.5;
		
		echo '<pre>'. print_r($arr1, 1) . '</pre>';
		
		echo $arr1[2];
	// echo $arr1[9];

	//echo $arr1{9}; // Depricated. Don't use it.

	// $array = array(
	// 	1 => "a",
	// 	"1" => "b",
	// 	1.5 => "c",
	// 	true => "d",
	// );

	// var_dump($array);


	$goods = [
		[
			'title' => 'Nokia',
			'price' => 100,
			'qty' => 10,
		],
		[
			'title' => 'Samsung',
			'price' => 200,
			'qty' => 5,
		],
		[
			'title' => 'Sony',
			'price' => 150,
			'qty' => 8,
		],
	];
		
		echo '<pre>'. print_r($goods, 1) . '</pre>';
		echo $goods[1]['title'];
		echo $goods[0]['title'];
		
		// $nums = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
		for ($i=0; $i <= 10; $i++) { 
			$nums[] = $i;
		}
		echo '<pre>'. print_r($nums, 1) . '</pre>';
		
	?>

</body>

</html>