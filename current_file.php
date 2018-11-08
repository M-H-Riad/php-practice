<!DOCTYPE html>
<html>
<head>
	<title>Get current file name</title>
</head>
<body>
	<?php 
		$current_file_name = basename($_SERVER['PHP_SELF']);
		echo $current_file_name;

	 ?>

</body>
</html>