<!DOCTYPE html>
<html>
<head>
	<title>Client ip</title>
</head>
<body>

	<?php
// ip from share internet
if (!empty($_SERVER['HTTP_CLIENT_IP']))   
  {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
  }
// ip from proxy
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))  
  {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
  }
// ip from remote address
else
  {
    $ip = $_SERVER['REMOTE_ADDR'];
  }
echo "Client ip address is ".$ip;
?>

</body>
</html>