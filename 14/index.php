<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Learn PHP 8 - Lesson 14</title>
</head>

<body>
	
	<?php
		
		//$price = null;
		$price = 10;
		
		// var_dump($price);
		
		$light = "green";
		
		// if ($light == "green") {
		// 	echo "Go!";
		// } else {
		// 	echo "Stop!";
		// };
		
		//echo ($light == "green") ? "Go!" : "Stop!";
		
		//echo $price ? $price : "Price is not set!";
		//echo $price ?: "Price is not set!";
		$test = $price >= 10 ?: "Price is not set!";
		var_dump($test);
		
	?>

</body>

</html>