<?php
	
	if(isset($_GET['name'])){
		//echo $_GET['name'];
		//print_r($_GET);
		//for security
		$name = htmlentities($_GET['name']);
		echo $name;
	}
	/*
	if(isset($_POST['name'])){
		$name = htmlentities($_POST['name']);
		echo $name;
	 }
	
	if(isset($_REQUEST['name'])){
		$name = htmlentities($_REQUEST['name']);
		echo $name;
	}
	*/
	//echo $_SERVER['QUERY_STRING'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Get_Post</title>
</head>
<body>
	<form method="GET" action="get_post.php">
		<div>
			<label>Name</label><br>
			<input type="text" name="name">
		</div>
		<div>
			<label>Email</label><br>
			<input type="text" name="email">
		</div>
		<input type="submit" value="submit">
	</form>
	<ul>
		<li>
			<a href="get_post.php?name=Brad">Brad</a>
		</li>
		<li>
			<a href="get_post.php?name=Steve">Steve</a>
		</li>
		<li>
			<a href="get_post.php?name=Tim">Tim</a>
		</li>
	</ul>
	<h2><?php echo "{$name}'s Profile";?></h2>
</body>
</html>