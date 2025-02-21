<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Learn PHP 8 - Lesson 12</title>
</head>

<body>
	
	<?php
		
		$min = 60;         // 60 seconds in a minute
		$hour = $min * 60; // 60 minutes in an hour
		$day = $hour * 24; // 24 hours in a day
		$week = $day * 7;  // 7 days in a week
		
		echo "There are $hour seconds in an hour.";
		echo "<br>There are $day seconds in a day.";
		echo "<br>There are $week seconds in a week.";
		
		echo "<br><br>";
		
		$x = 60;  
		$x *= 60; // Convert minutes to seconds  
		echo "<br>There are $x seconds in 60 minutes.";  
		
		$x /= 60; // Convert back to minutes  
		$x *= 24; // Convert minutes to hours  
		echo "<br>There are $x seconds in 24 hours.";  
		
		$x /= 24; // Convert back to hours  
		$x *= 7; // Convert hours to a week  
		echo "<br>There are $x seconds in 7 days.";  
		

	?>

</body>

</html>