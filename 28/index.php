<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Learn PHP 8 - Lesson 28</title>
</head>

<body>

	<h1>Альтернативный синтаксис управляющих структур</h1>
	
	<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia placeat adipisci iusto eos voluptatum totam. Quae odio, consequatur unde sunt repudiandae culpa necessitatibus inventore voluptatum illum dignissimos deleniti eveniet alias dolore quibusdam quo explicabo minima, quas ipsam, architecto nihil sint rem autem! Maxime rem non, deleniti adipisci sit nemo esse?</p>
	
	<?php
		$nums = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
		
		// foreach ($nums as $num) {
		// 	echo "Начинаем цикл<br>";
		// 	echo "<p>$num</p>";
		// 	echo "Заканчиваем цикл<br>";
		// }
		
		foreach ($nums as $num):
			echo "Начинаем цикл<br>";
			echo "<p>$num</p>";
			echo "Заканчиваем цикл<br>";
		endforeach;
	?>
	
		
	<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia placeat adipisci iusto eos voluptatum totam. 
	
	<?php foreach ($nums as $num): ?>
		<p><?= $num ?></p>
	
		<?php endforeach; ?>
	Quae odio, consequatur unde sunt repudiandae culpa necessitatibus inventore voluptatum illum dignissimos deleniti eveniet alias dolore quibusdam quo explicabo minima, quas ipsam, architecto nihil sint rem autem! Maxime rem non, deleniti adipisci sit nemo esse?</p>
	
	

</body>

</html>