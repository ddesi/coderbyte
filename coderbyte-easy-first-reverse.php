<?php 

// Have the function FirstReverse(str) take the str parameter being passed and return the string in reversed order.

function FirstReverse($str) {  
	$str = strrev($str);
	return $str;     
}
   
echo FirstReverse("some string");  

?>