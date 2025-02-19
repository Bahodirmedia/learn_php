<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Learn PHP 8 - Lesson 7</title>
</head>

<body>
	<?php
	
	$str = '<p>Hello World!</p>';
	$str2 = "<p>Hello World!</p>";
	
	echo "<p>Hello 1</p>\n";
	echo "<p>Hello \\2</p>";
	echo PHP_EOL;
	echo "<p>Hello 3</p>\n";
	
	$str3 = "Lorem, ipsum dolor sit \"amet\", consectetur adipisicing elit. Vero, est! Autem incidunt alias perferendis eligendi sed quod a nostrum, enim quo neque aliquid magni? Ducimus fugit sequi laboriosam exercitationem aperiam nemo dolorum vel facilis minima quia labore, sit nihil earum ratione tempore cumque facere accusantium? Accusantium quia fugit tempora fuga";
	
	$name = 'John Doe';
	$str4 = <<<"HEREDOC"
	
	<div>
	Hello $name <br>
	Lorem, ipsum dolor sit "amet", consectetur adipisicing elit. Vero, est! Autem incidunt alias perferendis eligendi sed quod a nostrum, enim quo neque aliquid magni? Ducimus fugit sequi laboriosam exercitationem aperiam nemo dolorum vel facilis minima quia labore, sit nihil earum ratione tempore cumque facere accusantium? Accusantium quia fugit tempora fuga		
	</div>
	HEREDOC;
	
	echo $str4;
	
	$str5 = <<<'NOWDOC'
	
	<div>
	Hello $name <br>
	Lorem, ipsum dolor sit "amet", consectetur adipisicing elit. Vero, est! Autem incidunt alias perferendis eligendi sed quod a nostrum, enim quo neque aliquid magni? Ducimus fugit sequi laboriosam exercitationem aperiam nemo dolorum vel facilis minima quia labore, sit nihil earum ratione tempore cumque facere accusantium? Accusantium quia fugit tempora fuga		
	</div>
	NOWDOC;
	
	echo $str5;
	
	var_dump((string)123);
	var_dump((string)true);
	var_dump((string)false);
	
	
	?>

</body>

</html>