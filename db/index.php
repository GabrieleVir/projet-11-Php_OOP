<?php 
spl_autoload_register(function ($class_name){
	require 'assets/php/class.'. $class_name . '.php';
});	
	session_start();
	$newUser = new USER();
	
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Index</title>
</head>
<body>

</body>
</html>