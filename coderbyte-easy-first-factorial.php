<?php 

function FirstFactorial($num) {
	$res = 1;

	if($num == 1){
		return 1;
	} else {
		return $num * FirstFactorial($num-1);
	}
}
   
// keep this function call here  
echo FirstFactorial(fgets(fopen('php://stdin', 'r')));  

?>