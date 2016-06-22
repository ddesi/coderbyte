<?php 

//Have the function VowelCount(str) take the str string parameter being passed and return the number of vowels the string contains (ie. "All cows eat grass" would return 5). Do not count y as a vowel for this challenge. 

function VowelCount($str) {

	$letters = str_split($str);
	$vowels = array('a','e','i','o','u','A','E','I','O','U');
	$count = 0;

	foreach ($letters as $vowel) {
		if(in_array($vowel, $vowels)){
			$count++;
		}
	}
	return $count;
         
}

function VowelCount($str){
	return preg_match('/[aeiou]/', $str); 
}

?>