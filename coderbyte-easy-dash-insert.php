<?php 

//Have the function DashInsert(str) insert dashes ('-') between each two odd numbers in str. For example: if str is 454793 the output should be 4547-9-3. Don't count zero as an odd number. 

function DashInsert($str) {
	$digits = str_split($str);
	$result = $digits[0];

	for($i=1; $i<count($digits); $i++){
		$n1 = $digits[$i];
		$n2 = $digits[$i-1];
		
		if($n1%2 && $n2%2){
			$result .= '-';
		}
		$result .= $n1;
	}
	return $result;
}

//w regex 

function DashInsert($str) {
	return preg_replace('`([13579])(?=[13579])`',"$1-$2",$str); 
}

?>