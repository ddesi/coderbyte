<?php 

//Have the function RunLength(str) take the str parameter being passed and return a compressed version of the string using the Run-length encoding algorithm. This algorithm works by taking the occurrence of each repeating character and outputting that number along with a single character of the repeating sequence. For example: "wwwggopp" would return 3w2g1o2p. The string will not contain any numbers, punctuation, or symbols. 

function RunLength($str) {

	$letter = $str[0];
	$count = 0;
	$res = '';
	$str .= ' ';

	for($i=0; $i<strlen($str); $i++) {
		$character = $str[$i];
		if($letter == $character) {
			$count++;
		} else {
			$res .= $count . $letter;
			$letter = $character;
			$count = 1;
		}
	}
	return $res;
}