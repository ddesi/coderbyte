<?php 

//Have the function StringScramble(str1,str2) take both parameters being passed and return the string true if a portion of str1 characters can be rearranged to match str2, otherwise return the string false. For example: if str1 is "rkqodlw" and str2 is "world" the output should return true. Punctuation and symbols will not be entered with the parameters. 

function StringScramble($str1,$str2) {
	$arr1 = str_split($str1);
	$arr2 = str_split($str2);

	if(!array_diff($arr2, $arr1)){
		return 'true';
	} else {
		return 'false';
	}
}

// w loop

function StringScramble($str1,$str2) { 
	$str1 = str_split($str1);
	$str2 = str_split($str2);

	foreach ($str2 as $character){
		if(!in_array($character,$str1)){
			return 'false';
		}
		return 'true'; 
	}
}

?>