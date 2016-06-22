<?php 

function FirstReverse($str) {  
	$str = strrev($str);
	return $str;     
}
   
// keep this function call here  
echo FirstReverse(fgets(fopen('php://stdin', 'r')));  

?>
