<!DOCTYPE html>
<html>
<head>
	<title>email validate</title>
</head>
<body>

	<?php

		$email="mhr@example.com";
		if (filter_var($email,FILTER_VALIDATE_EMAIL)) {
			echo "Email is validate";
		}
		else
		{
			echo "Email is not validate";
		}
	?>

</body>
</html>