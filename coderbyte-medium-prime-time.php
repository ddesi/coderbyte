<?php 

//Have the function PrimeTime(num) take the num parameter being passed and return the string true if the parameter is a prime number, otherwise return the string false. The range will be between 1 and 2^16. 

function PrimeTime($num) {
	for ($i=2; $i<sqrt($num); $i++){
		if (!is_float($num/$i)){
			return 'false';
		}
	}
	return 'true';
}