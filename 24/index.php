<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Learn PHP 8 - Lesson 24</title>
</head>

<body>

	<h1>Пользовательские функции. Часть 1</h1>

	<?php
	// Функции
	// sayHello();
	// function sayHello()
	// {
	// 	echo 'Hello, World!';
	// }

	// sayHello();
	// sayHello();
	
	// Функции с параметрами
	// function sayHello($name = 'World')
	// {
	// 	echo "Hello, {$name}";
	// }

	// sayHello('John');
	// sayHello();
	
	// Функции с возвращаемым значением
	
	// function sum($b, $a = 1, $c = 2,)
	// {
	// 	echo ($a + $b) * $c;
	// }
	
	// sum(1, 2);
	
	// Локальные и глобальные переменные
	
	// $a = 5;
	
	// function test($a)
	// {
	// 	global $a; // Обращение к глобальной переменной
	// 	$a +=10;
	// 	var_dump($a);
	// }
	
	// var_dump($a);
	// test($a);
	// var_dump($a);
	
	function test(&$num) {
		$num +=10;
	}
	
	$num = 20;
	test($num);
	var_dump($num);
	
?>

</body>

</html>