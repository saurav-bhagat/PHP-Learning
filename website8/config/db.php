<?php
	//create connection to database
	// require 'config.php';
	$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

	//check connection
	if(mysqli_connect_errno()){
		//connection failed
		echo "Failed to connect to database " .mysqli_connect_errno();
	} else {

	}
?>