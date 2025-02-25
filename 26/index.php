<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Learn PHP 8 - Lesson 26</title>
</head>

<body>

	<h1>Домашнее задание</h1>

	<?php
	
	/* 1. Напишите функцию get_count($arr), принимающую параметром массив, которая будет возвращать кол-во элементов, полученного массива. Примеры массивов для теста функции:
$arr = [1,2,3,4,5,6,7,8,9,10,];
$goods = [
        [
            'title' => 'Nokia',
            'price' => '100',
            'qty' => '10',
        ],
        [
            'title' => 'Sony',
            'price' => '120',
            'qty' => '7',
        ],
        [
            'title' => 'LG',
            'price' => '105',
            'qty' => '15',
        ],
    ];
*/
	
	$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
	$goods = [
		[
			'title' => 'Nokia',
			'price' => 100,
			'discount' => 10
		],
		[
			'title' => 'Samsung',
			'price' => 200,
			'discount' => 20
		],
		[
			'title' => 'Sony',
			'price' => 150,
			'discount' => 15
		]
	];

	function get_count(array $arr): int
	{
		$count = 0;
		foreach ($arr as $num) {
			$count += 1;
		}
		return $count;
	}

	echo get_count($goods);

// 2. Напишите функцию, принимающую 2 параметра, которая выведет таблицу умножения по полученным множителям

	function table($tr_cnt, $td_cnt)
	{
		$table = "<table border='1' width='100%'>";

		for ($tr = 1; $tr <= $tr_cnt; $tr++) {
			$table .= "<tr>";
			for ($td = 1; $td <= $td_cnt; $td++) {
				$table .= "<td>$td * $tr = " . $td * $tr . "</td>";
			}
			$table .= "</tr>";
		}
		$table .= "</table>";
		return $table;
	}


	echo table(2, 3);
	
	echo "<hr>";
	
	echo table(9, 9);

	?>

</body>

</html>