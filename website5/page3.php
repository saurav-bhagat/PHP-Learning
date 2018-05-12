<?php
	$user = ['name' => 'Saurav','email' => 'saurav@gmail.com','age' => 20];


	//setcookie only accepts a string, we can't pass array so for that we have serialize funcion
	$user = serialize($user);
	setcookie('user',$user,time()+(86400*30));

	//to grab data back, we have to unserialize it
	$user = unserialize($_COOKIE['user']);
	echo $user['name'];
	print_r($user);
?>