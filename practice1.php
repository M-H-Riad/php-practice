<?php
	$var="Php toutorial";
?>
<!DOCTYPE html>
<html>
<head>
	<title> <?php echo "$var"; ?></title>
</head>
<body>

		<h3>Please input your name</h3>
		<form method="post">
		<input type="text" name="name">
		<input type="submit" name="Submit">
		</form>
	<?php
	$name="";
	$name=$_POST['name'];
	echo "Hello ".$name;
	?>

	
	<h3><?php echo "Hello ! I am learning "."$var";  ?></h3><br><br>

		

</body>
</html>