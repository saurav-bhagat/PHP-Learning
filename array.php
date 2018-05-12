<?php 
	
	//php arrays
	/*
		-Indexed
		-associative
		-multidimensional
	*/

	//indexed
	$people = array('saurav','ankit','hemanth');
	$ids = array(23,55,12);
	
	$cars = ['honda','toyota','ford'];
	$cars[3] = 'nisaan';
	$cars[] = 'BMW';

	//echo count($cars);
	//print_r($cars); - print whole array
	//var_dump($cars); // for debugging seeing data type

	#echo $people[1];
	//echo $cars[4]; //BMW



	#Associated arrays;
	$people = array('saurav' => 19,'mitu' => 21);
	$ids = [21=>'mitu', 19=>'saurav'];


	$people['jill'] = 42;
	//echo $ids[21];
	//echo $people['mitu'];
	//print_r($people);

	#multidimensional arrays
	$mul = [[1,2,3],[4,5,6],[7,8,9]];
	//echo $mul[1][0];

?>