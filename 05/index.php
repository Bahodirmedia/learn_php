<?php
	define("CONST_1", "value 1");
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Learn PHP 8 - Lesson 5</title>
</head>

<body>
	<?php
		echo CONST_1;
		
		const CONST_2 = 'value 2';
		
		var_dump(CONST_2);
        
        Const Name = 'John Doe';
        
        echo "Hello {Name}";
        
        //define("CONST_1", "new value 1");
        
        //$this = 'test';
        
        //var_dump(get_defined_constants());
	?>

</body>

</html>