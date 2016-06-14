<?php

 //Have the function SimpleAdding(num) add up all the numbers from 1 to num. For the test cases, the parameter num will be any number from 1 to 1000.  

function SimpleAdding($num) {  

	if ($num > 1 && $num <= 1000) {
		$result = $num + SimpleAdding($num - 1);
	} elseif($num == 1) {
		$result = 1;
	} else {
		$result = 0;
	}

	return $result;      
}
   
echo SimpleAdding(8);  

?>