<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Learn PHP 8 - Lesson 11</title>
</head>

<body>
	
	<?php
		
		// $a = (3 == 3) && (3 < 2); //  true && false = false
		// var_dump($a); // bool(false);
		
		// $a = (3 == 3) and (3 < 2); //  true and false = false
		// var_dump($a); // bool(true);  // and has lower precedence than =, so it is executed first
		
		// $a = (2 == 3) || (3 > 2); //  false || true = true
		// var_dump($a); // bool(true);
		
		// $a = (2 == 3) or (3 > 2); //  false || true = true
		// var_dump($a); // bool(false); // or has lower precedence than =, so it is executed first
		
		// var_dump(!(2 > 3)); // bool(true); 
		
		echo "<p>Hello 1</p>" . PHP_EOL ."<p>Hello 2</p>" . PHP_EOL; // Hello 1 Hello 2  // . is used for concatenation
		
		$name = 'John Doe';
		echo "Hello {$name}"; // Hello John Doe
		echo 'Hello ' . $name; // Hello John Doe
		
		$str = 'Hello';
		echo $str = $str . ' World'; // Hello World
		echo $str .= ' World'; // Hello World
	?>

</body>

</html>