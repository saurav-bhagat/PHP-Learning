<?php
//File system functions
	$path = '/dir1/myfile.php';
	$file = 'file1.txt';

	//Return filename
	//echo basename($path);

	//filename without extrnsion
	//echo basename($path, '.php');

	//return directory name from path
	//echo dirname($path);

	//to check if a file exist, can be done for folders too
	//echo file_exists($file);

	//get abs path
	// echo realpath($file);

	//checks to see if file
	// echo is_file($file);

	//check if a file is writable
	// echo is_writable($file);
	// echo is_readable($file);

	//get the file size
	// echo filesize($file);

	//create a directory
	//mkdir('testing');
	//rmdir('testing');

	//copy a file
	// echo copy('file1.txt', 'file2.txt');

	//rename a file
	//rename('file2.txt','myfile.txt');

	//delete a file
	// unlink('myfile.txt');

	//write from file to string
	// echo file_get_contents($file);

	//write string to the file(replace)
	// echo file_put_contents($file, 'Good bye world');

	//to append to a file
	/*$current = file_get_contents($file);
	$current .= " Good Bye world";
	file_put_contents($file, $current );
	*/

	//open a file for readding
	/*$handle = fopen($file, 'r');
	$data = fread($handle, filesize($file));
	fclose($handle);
	echo $data;
	*/

	/*
	//open file for writing
	$handle = fopen('file2.txt', 'w');
	$txt = "John Doe\n";
	fwrite($handle, $txt);
	//we can add more text into it
	fclose($handle);
	*/
?>