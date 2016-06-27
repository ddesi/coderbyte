<?php 

//Have the function BitwiseOne(strArr) take the array of strings stored in strArr, which will only contain two strings of equal length that represent binary numbers, and return a final binary string that performed the bitwise OR operation on both strings. A bitwise OR operation places a 0 in the new string where there are zeroes in both binary strings, otherwise it places a 1 in that spot. For example: if strArr is ["1001", "0100"] then your program should return the string "1101" 

function BitwiseOne($strArr) {
	$string1 = $strArr[0];
  	$string2 = $strArr[1];
  	$final = '';

  	for($i=0; $i<strlen($string1); $i++){
  		if ($string1[$i] || $string2[$i]) {
  			$final .= 1;
  		} else {
  			$final .= 0;
  		}
  	}
  	return $final;

}

?>