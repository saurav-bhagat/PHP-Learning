<?php
	
	session_start();

	//print_r($_SESSION);
	$name = $_SESSION['name'];
	$email = $_SESSION['email'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Page3</title>
</head>
<body>
	<h1>Hello <?php echo $name; ?></h1>
</body>
</html>