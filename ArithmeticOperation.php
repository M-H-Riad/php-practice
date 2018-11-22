<!DOCTYPE html>
<html>
<head>
	<title>Arithmetic Operation</title>
</head>
<body>

	<?php

		//This will show the current version of php..
		echo 'Current PHP version : ' . phpversion()."<br>";

		// Arithmetic operations on character variables : $d = 'A00'. Using this variable print the following numbers.
		$text='A02';
		for ($i=0; $i < 8; $i++) { 

			echo "$text"."<br>";
			++$text;
		}



	?>

</body>
</html>