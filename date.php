<?php
	//echo date('d'); //Day 
	//echo date('m'); //month
	//echo date('Y'); //year
	//echo date('l'); //Day of the week

	//echo date('Y/m/d');
	//echo date('d-m-Y');

	//echo date('h') //Gives hour
	//echo date('i') //gives minute
	//echo date('s') //gives second
	//echo date('a') //am or pm
	

	//but we need to define the timezone first
	//date_default_timezone_set('')
	//echo date('h:i:sa');

	$timestamp = mktime(10,14,54,9,10,1981);
	//echo $timestamp

	//echo date('m/d/Y h:i:sa', $timestamp);

	$timestamp2 = strtotime('7:00pm March 22 2016');
	$timestamp3 = strtotime('tomorrow');
	$timestamp4 = strtotime('next sunday');
	$timestamp5 = strtotime('+2 Days');

	echo date('m/d/Y h:i:sa',$timestamp5);
 ?>