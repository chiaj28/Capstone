<?php

	define('HOST', '10.0.0.4');
	define('USER', 'user');
	define('PASS', 'P@ssw0rd');
	define('NAME', 'sky');

	$string = "mysql:host=".HOST.";dbname=".NAME;
	if(!$con = new PDO($string,USER,PASS))
	{
		die("Failed to connect");
	}

?>
