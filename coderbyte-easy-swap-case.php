<?php 

//Have the function SwapCase(str) take the str parameter and swap the case of each character. For example: if str is "Hello World" the output should be hELLO wORLD. Let numbers and symbols stay the way they are.

function SwapCase($str) { 

	$letters = str_split($str);

	foreach ($letters as &$character) {
		if(ctype_upper($character)){
			$character = lcfirst($character);
		} elseif (ctype_lower($character)) {
			$character = ucfirst($character);
		}
	}
	return implode('', $letters);
         
}