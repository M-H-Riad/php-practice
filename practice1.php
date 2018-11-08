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
	<h3><?php echo "I am learning "."$var";  ?></h3><br><br>

		<?php
//whether ip is from share internet
if (!empty($_SERVER['HTTP_CLIENT_IP']))   
  {
    $ip_address = $_SERVER['HTTP_CLIENT_IP'];
  }
//whether ip is from proxy
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))  
  {
    $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
  }
//whether ip is from remote address
else
  {
    $ip_address = $_SERVER['REMOTE_ADDR'];
  }
echo $ip_address;
?>

</body>
</html>