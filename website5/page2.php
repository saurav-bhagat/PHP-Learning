<?php


	if(count($_COOKIE) > 0){
		echo 'There are '.count($_COOKIE).' cookies saved<br>';
	}else {
		echo "There are no cookies saved";
	}

	if(isset($_COOKIE['username'])){
		echo 'User '. $_COOKIE['username'].' is set<br>';
	} else {
		echo 'user is not set';
	}
	//to update/change the cokkie we can again use setcookie

	//setcookie('username','Frank',time()+ (86400 * 30))

	//To Unset Cookie-set the time which is passed.
	//setcookie('username','Frank',time()-3600);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Cookie-page2</title>
</head>
<body>

</body>
</html>