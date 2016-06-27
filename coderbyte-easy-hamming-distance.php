<?php 

//Have the function HammingDistance(strArr) take the array of strings stored in strArr, which will only contain two strings of equal length and return the Hamming distance between them. The Hamming distance is the number of positions where the corresponding characters are different. For example: if strArr is ["coder", "codec"] then your program should return 1. The string will always be of equal length and will only contain lowercase characters from the alphabet and numbers. 

function HammingDistance($strArr) {
	$word1 = str_split($strArr[0]);
	$word2 = str_split($strArr[1]);
	$count = 0;

	for($i=0; $i<count($word1); $i++){
		if ($word1[$i] !== $word2[$i]){
			$count++;
		}
	}

	return $count;

}

?>