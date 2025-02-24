<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Learn PHP 8 - Lesson 22</title>
</head>

<body>

	<h1>Цикл foreach</h1>
	
	<?php
		$nums = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
		
		// $i = 0;
		// while ($i < 10) {
		// 	echo $nums[$i] . '<br>';
		// 	$i++;
		// }
		
		// for ($i=0; $i < 10; $i++) { 
		// 	echo $nums[$i] . '<br>';
		// }
		
		
		// foreach ($nums as $num) {
		// 	echo $num . '<br>';
		// }
		
		// echo '<br>';
		
		// foreach ($nums as $key => $num) {
		// 	echo "Key: $key Value: $num . <br>";
		// }
		
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
		
		// for ($i=0; $i < 3; $i++) { 
		// 	echo "Name: {$goods[$i]['title']} <br>";
		// 	echo "Price: {$goods[$i]['price']} <br>";
		// 	echo "Quantity: {$goods[$i]['qty']} <br>";
		// 	echo '<hr>';
			
		// }
		// foreach ($goods as $good) {
		// 	echo "Name: {$good['title']} <br>";
		// 	echo "Price: {$good['price']} <br>";
		// 	echo "Quantity: {$good['qty']} <br>";
		// 	echo '<hr>';
		// }
		
		// for ($i=0; $i < 3; $i++) { 
		// 	// $goods[$i]['total'] = $goods[$i]['price'] * $goods[$i]['qty']; 	
		// 	$goods[$i]['price'] *=2;		
		// }
		
		foreach ($goods as &$good) {
			$good['price'] *=2;
		}
		
		echo '<pre>'. print_r($goods, 1) . '</pre>';
	?>

</body>

</html>