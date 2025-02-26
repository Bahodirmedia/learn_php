<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Learn PHP 8 - Lesson 27</title>
</head>

<body>

	<h1>Подключение файлов в PHP</h1>

	<?php
	
	// Подключение файла с функциями
	// include "funcs2.php";
	require_once "funcs.php";
	
	// Подключение файла с переменными
	// include "conf.php";
	$data = require_once "src/conf.php";
	print_r($data);
	// require "test.php";
	// require "test.php";
	// require "test.php";
	
	
	// echo "<h2>Таблица умножения</h2>";
	
	// Вызов функции из подключенного файла
	echo table(9, 7);
	
	?>

</body>

</html>