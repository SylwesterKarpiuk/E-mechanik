<?php
		
	define('HOST', '');
	dfine('USERNAME', '');
	define('PASSWORD', '');
	define('DB','');
	
	$con = mysqli_connect(HOST,USERNAME,PASSWORD,DB) or die('Unable to connect');