<!DOCTYPE html>
<html>
<head>
	<title>Count Num of Lines</title>
</head>
<body>
	<?php
		$file=basename('practice1.php');
		$Num_Of_Lines= count(file($file));
		echo "There are $Num_Of_Lines lines in $file file.";


	?>

</body>
</html>