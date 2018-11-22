<!DOCTYPE html>
<html>
<head>
	<title>file modified time</title>
</head>
<body>

	<?php
		$current_file_name = basename('practice1.php');
		$file_last_modified = filemtime($current_file_name); 
		echo "Last ".date("l,dS,F,Y,h:ia",$file_last_modified);
	?>

</body>
</html>