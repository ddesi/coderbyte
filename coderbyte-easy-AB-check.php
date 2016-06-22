<?php

//Have the function ABCheck(str) take the str parameter being passed and return the string true if the characters a and b are separated by exactly 3 places anywhere in the string at least once (ie. "lane borrowed" would result in true because there is exactly three characters between a and b). Otherwise return the string false. 

function ABCheck($str) {

	if(preg_match('/a.{3}b|b.{3}a/', $str)) {
		return 'true';
	}
	return 'false';
}

function ABCheck($str) {

	for($i = 0; $i < strlen($str); $i++){
		if($str[$i] == 'a' && $str[$i+4] == 'b' || $str[$i] == 'b' && $str[$i+4] == 'a'){
			return 'true'; 
		}
	}
	return 'false'; 
         
}

?>