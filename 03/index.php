<?php //phpinfo(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Learn PHP 8 - Lesson 3</title>
</head>

<body>

	<?php
		echo '<p>Hello World PHP 1</p>' # This is a comment;
		//echo '<p>Hello World PHP 2</p>';
		
		/*
		* This is a multi-line comment block
		* This is a multi-line comment block
		* This is a multi-line comment block
		*/
	?>
	
	<?php echo '<p>Hello World PHP 3</p>'; ?>
	
	<?= '<p>Hello World PHP 4</p>';?>
	<?php //echo '<p>Hello World PHP 4</p>'; ?> 
	
	<!-- Not recommended: -->
	
	<? echo '<p>Hello World PHP 5</p>'; ?>
	
</body>

</html>