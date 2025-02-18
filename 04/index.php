<?php

	error_reporting(-1);
	
	$title = 'Lesson 4!';
	//$winnie_the_pooh = 'Hello I am Winnie';
	//$winnieThePooh = 'Hello I\'m Winnie';
	
	$fruit = 'orange';
	$winnieThePooh = "Hello I'm Winnie. I have 2 {$fruit}s";
	
	$var = 'Test 1';
	$Var = 'Test 2';
	
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Learn PHP 8 - <?= $title?></title>
</head>

<body>
	<?php $title = 'Lesson 4' ?>
	<h1><?php echo $title ?></h1>
	<p><?php echo $winnieThePooh ?></p>
	
	<?php
		var_dump($var, $Var);
		var_dump('$');
		var_dump('€');
		var_dump('Hello', 'Привет');
		
	?>
	
</body>

</html>