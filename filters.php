<?php 
	/*
	check for post data
	if(filter_has_var(INPUT_POST, 'data')){
		echo 'Data Found';
	}else {
		echo 'No Data';
	}
	
	if(filter_has_var(INPUT_POST, 'data')){
		if(filter_input(INPUT_POST, 'data',FILTER_VALIDATE_EMAIL)){
			echo "Email is valid";
		}else{
			echo "Email is not valid";
		}
	}
	
	if(filter_has_var(INPUT_POST, 'data')){

		$email = $_POST['data'];
		//remove illegal chars
		$email = filter_var($email, FILTER_SANITIZE_EMAIL);
		echo $email .'<br>';
		if(filter_var($email,FILTER_VALIDATE_EMAIL)){
			echo "Email is valid";
		}else{
			echo "Email is not valid";
		}
	}
	
	FILTER_VALIDATE_BOOLEAN
	FILTER_VALIDATE_EMAIL
	FILTER_VALIDATE_FLOAT
	FILTER_VALIDATE_INT
	FILTER_VALIDATE_IP
	FILTER_VALIDATE_REGEXP
	FILTER_VALIDATE_URL

	FILTER_SANITIZE_EMAIL
	FILTER_SANITIZE_ENCODED
	FILTER_SANITIZE_NUMBER_FLOAT
	FILTER_SANITIZE_NUMBER_INT
	FILTER_SANITIZE_SPECIAL_CHARS
	FILTER_SANITIZE_STRING
	FILTER_SANITIZE_URL
	*/
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<input type="text" name="data">
	<button type="submit">Submit</button>
</form>