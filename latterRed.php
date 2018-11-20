<!DOCTYPE html>
<html>
<head>
	<title>First latter red</title>
</head>
<body>
	<?php

		//It will change the color of first letter of a word.
		$text="New text";
		$text= preg_replace('/(\b[a-z])/i', '<span style="color:red;">\1</span>', $text);
		echo "$text <br>";



		// Check if http or https is called. 
			if (!empty($_SERVER['HTTPS']))
			{
			echo 'https is enabled';
			}
			else
			{
			echo 'http is enabled'."\n";
			}




	?>

</body>
</html>