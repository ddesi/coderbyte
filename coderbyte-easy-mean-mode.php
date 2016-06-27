<?php 

//Have the function MeanMode(arr) take the array of numbers stored in arr and return 1 if the mode equals the mean, 0 if they don't equal each other (ie. [5, 3, 3, 3, 1] should return 1 because the mode (3) equals the mean (3)). The array will not be empty, will only contain positive integers, and will not contain more than one mode. 

function MeanMode($arr) {
	$mean = array_sum($arr)/count($arr);
	$times = array_count_values($arr);
	$mode = array_search(max($times), $times);

	if($mean == $mode) return '1';
	else return '0';
}
?>