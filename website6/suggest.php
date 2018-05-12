<?php

//fetch this from database
$people = ["steve", "john","kathy","evan","anthony","tom","rhonda","hal","erie","johanna","farrah","linda","shawn","olivia","derek","amanda","rachel","katie","jillian","jose","malcom","greg","mery","brad","mike","mihy"];

	//get query string.
	$q = $_REQUEST['q'];

	$suggestions = "";

	if($q!=""){
		$len = strlen($q);
		foreach($people as $person){
			if(stristr($q, substr($person,0,$len))){
				if($suggestions == ""){
					$suggestions = $person;
				} else {
					$suggestions .= ", $person";
				}
			}
		}
	}

	echo $suggestions==="" ? "No Suggestion" : $suggestions;

?>