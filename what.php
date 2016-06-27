<?php
function ArrayAddition($arr) {  
	$max = max($arr);
	$count = count($arr);
	$scount = 1 << $count;

	for($i = 0; $i < $scount; $i++) {
		$used = array();
		for($j = 0; $j < $count; $j++) if((1 << $j) & $i) {
			$used[$j] = $j;
		}

		if(count($used) <= 1) continue;
		$sum = 0;

		foreach($used as $index) $sum += $arr[$index];
		if($sum == $max) return 'true';
	}
	return 'false'; 
         
}

?>