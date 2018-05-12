<?php 
	//substr()
	// $output = substr('Hello',1,3);
	//$output = substr('Hello', -2);
	//echo $output;

	$output = 'Hello World';
	//echo strlen($output);
	//echo strpos($output, 'o'); forst occurence
	//echo strrpos($output, 'o'); //last occurence

	//echo trim($output); // trims whitespace

	// echo strtoupper($output);
	//echo strtolower($output);

	//echo ucwords($output); capitalize every word

	// $text = str_replace('World', 'everyone',  $output);

	//echo is_string($output);

	$values = array(true, false, null, 'abc',33,'33', 22.4, '',' ',0,'0');

	foreach($values as $value){
		if(is_string($value)){
			//echo "{$value} is a string<br/>";
		}
	}

	// gzcompress() compress a string

?>