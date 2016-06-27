<?php

//Have the function ExOh(str) take the str parameter being passed and return the string true if there is an equal number of x's and o's, otherwise return the string false. Only these two letters will be entered in the string, no punctuation or numbers. For example: if str is "xooxxxxooxo" then the output should return false because there are 6 x's and 5 o's. 

function ExOh($str) {
	$ex = substr_count($str, 'x');
	$oh = substr_count($str, 'o');

	if($ex == $oh){
		return 'true';
	} else {
		return 'false';
	}

	return $str;
         
}

//preg_match

// function ExOh($str){
// 	return json_encode(preg_match_all('#x#', $str, $ex) == preg_match_all('#o#', $str, $ex)); 

// }

?>