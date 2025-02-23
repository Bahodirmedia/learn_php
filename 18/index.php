<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Learn PHP 8 - Lesson 18</title>
</head>

<body>

	<h1>Оператор switch</h1>

	<?php
		$i = 3;
		
		// if ($i == 1) {
		// 	echo "Переменная равна 1";
		// } elseif ($i == 2) {
		// 	echo "Переменная равна 2";
		// } elseif ($i == 3) {
		// 	echo "Переменная равна 3";
		// } elseif ($i == 4) {
		// 	echo "Переменная равна 4";
		// } elseif ($i == 5) {
		// 	echo "Переменная равна 5";
		// } else {
		// 	echo "Переменная не равна ни одному из значений";
		// }
		
		// switch ($i) {
		// 	case 1:
		// 		echo "Переменная равна 1";
		// 		break;
		// 	case 2:
		// 		echo "Переменная равна 2";
		// 		break;
		// 	case 3:
					
		// 		echo "Переменная равна 3";
		// 		break;
		// 	case 4:
		// 		echo "Переменная равна 4";
		// 		break;
		// 	case 5:
		// 		echo "Переменная равна 5";
		// 		break;
		// 	default:
		// 		echo "Переменная не равна ни одному из значений";
		// 		break;
		// }
		
		
		switch ($i) {
			case 1:
			case 2:
			case 3:
				echo "Переменная равна < 4";
				break;
			case 4:
				echo "Переменная равна 4";
				break;
			case 5:
				echo "Переменная равна 5";
				break;
			default:
				echo "Переменная не равна ни одному из значений";
				break;
		}
	?>

</body>

</html>