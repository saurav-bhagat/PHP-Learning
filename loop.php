<?php
	//loops in php = for, while, forEach
	
	// echo "Loops";
	// for($i=0;$i<10;$i++)
	{
		// echo $i;
		// echo '<br>';
	}

	//while loop
	$i=0;
	// while($i<10)
	{
		// echo $i;
		// echo '<br>';
		// $i++;
	}

	// $people = ['saurav','mitu','jilly'];
	// foreach($people as $person){
	// 	echo $person;
	// 	echo '<br>';
	// }
	$people = ['saurav'=>'saurav@gmail.com','mitu'=>'mitu@gmail.com','jilly'=>'jilly@gmail.com'];
	foreach ($people as $person => $email) {
		# code...
		echo '<h2>Name:- '. $person; 
		echo ' Email is:- ' . $email . ' </h2>';
	}
?>