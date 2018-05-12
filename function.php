<?php
	
	function simpleFunction(){
		echo "Function is running";
	}

	//simpleFunction();

	function sayHello($name = "World"){
		echo "Hello $name<br>";
	}

	//sayHello('joe');

	//we can pass arguments be reference, normally its passed by value, e.g.
	function addFive($num){
		$num +=5;
	}

	function addTen(&$num){
		$num+=10;
	}

	$num=10;
	addFive($num);
	echo "$num <br>";

	addTen($num);
	echo "$num <br>";
?>