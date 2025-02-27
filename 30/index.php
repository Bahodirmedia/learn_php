<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Learn PHP 8 - Lesson 30</title>
</head>

<body>

	<h1>Домашнее задание</h1>

	<?php

/*
 * Дан массив:
 * $nums = [1, 2, 3, 1, 4, 5, 3, 2, 6, 7, 7, 8, 8, 9, 2, 5,];
 * Напишите свой вариант функции count() - user_count() - которая будет принимать аргументом одномерный массив и возвращать кол-во элементов массива (длину массива)
 * */

	$nums = [1, 2, 3, 1, 4, 5, 3, 2, 6, 7, 7, 8, 8, 9, 2, 5,];
//вариант 1:
	//echo count($nums);
	
//вариант 2:
	function user_count($elements) {
		$count = 0; // Initialize counter
	
		foreach ($elements as $element) {
			$count++; // Increment count for each element
		}
		return $count; // Return total count
	}
	
	//echo user_count($nums);
	
/*
 * Дан массив:
 * $nums = [1, 2, 3, 1, 4, 5, 3, 2, 6, 7, 7, 8, 8, 9, 2, 5,];
 * Подсчитайте сумму значений элементов массива. Попробуйте написать 2 варианта решения: со специальной функцией и без нее
 * */
	
//вариант 1:
// echo "Sum: " . array_sum($nums);

//вариант 2:
	function sum($nums) {
		$sum = 0;
	    foreach ($nums as $num) {
	        $sum += $num;
	    }
	    return $sum;
	}

/*
 * Создайте массив из чисел от 1 до 100. Попробуйте написать 2 варианта решения: со специальной функцией и без нее
 * */
//вариант 1:
// $numbers = range(1, 100);
// echo '<pre>' . print_r($numbers, true) . '</pre>';

//вариант 2:
	$numbers = [];
	for ($i = 1; $i <= 100; $i++) {
	    $numbers[] = $i;
	// 	array_push($numbers, $nums[$i]);
	}
	echo '<pre>' . print_r($numbers, 1) . '</pre>';
	?>

</body>

</html>