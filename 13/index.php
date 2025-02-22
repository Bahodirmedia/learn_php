<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Learn PHP 8 - Lesson 13</title>
</head>

<body>
	
	<?php
		
		echo ' Test 1', ' Test 2', ' Test 3', ' Test 4'; 
		
		echo '<br><br>';
		
		print ' Test 1' . ' Test 2' . ' Test 3' . ' Test 4'; 
		
		echo '<br><br>';
		
		// PHP conditionals
		
		$light = 'green';
		
		if ($light == 'green') {
			echo 'You can Go';
		} elseif ($light == 'yellow') {
			echo 'Get ready to go';
			if (2 > 3) {
				echo 'This is not possible';
			} else {
				echo 'This is possible';
			}
		} else {
			echo 'Stop';
		}
		
	?>

</body>

</html>