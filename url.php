<?php 

	$url= 'https://www.w3resource.com/php-exercises/php-basic-exercises.php';
	$url = parse_url($url);

	echo "Scheme: ".$url['scheme']."<br>";
	echo "Host: ".$url['host']."<br>";
	echo "path: ".$url['path'];




 ?>