<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Learn PHP 8 - Lesson 6</title>
</head>

<body>
	<?php
	
	/* Boolean
		$bool = true; // 1
		$bool2 = false; // ''
		
		//var_dump((boolean)0, (bool)[], (bool)'', (bool)'0', (bool)'1', (bool)'false', (bool)'true', (bool)'test');
		
		//echo $bool2;
		
		/* Numbers
		$int1 = 0;
		$int2 = 1;
		
		var_dump($int1, $int2);
		var_dump(PHP_INT_MAX, 9223372036854775807); // 64 bit // < float
		*/
		
		// var_dump((int)"10"); // Outputs: int(10) - Numeric string is converted to an integer
		// var_dump((int)"10Hello"); // Outputs: int(10) - Numeric prefix is extracted and converted
		// var_dump((int)"Hello Hello Hello"); // Outputs: int(0) - No numeric prefix, so it defaults to 0
		
		// var_dump("10" + 20); // Outputs: int(30) - String is converted to an integer
		// var_dump("10Hello" + 20); // Outputs: int(30) - Numeric prefix is extracted and converted
		// var_dump("Hello10" + 20); // Outputs: TypeError
		
		/* Float */
		$float = 1_234.567; // 1234.567 >= PHP 7.4
		var_dump($float);
		
		//var_dump((float)123 + 10); // Outputs: float(133)
		
		var_dump(0.1 + 0.2); // Outputs float(0.30000000000000004) due to floating-point precision
		var_dump((0.1 * 10 + 0.2 * 10) / 10); // Outputs float(0.3) by scaling to avoid precision issues

	?>

</body>

</html>