<?php 
	session_start();

	$name = isset($_SESSION['name']) ? $_SESSION['name'] : '' ;
	$email = $_SESSION['email'];
	//we can update the session variables here.
?>

<!DOCTYPE html>
<html>
<head>
	<title>Page2</title>
</head>
<body>
	<h3>PHP session-page2</h3>
	<h5>Thank you <?php echo $name; ?>, You have subscribed with the email <?php echo $email; ?></h5>

	<a href="page3.php">Go to page 3</a>
</body>
</html>