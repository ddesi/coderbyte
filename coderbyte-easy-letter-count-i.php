<?php 

//Have the function LetterCountI(str) take the str parameter being passed and return the first word with the greatest number of repeated letters. For example: "Today, is the greatest day ever!" should return greatest because it has 2 e's (and 2 t's) and it comes before ever which also has 2 e's. If there are no words with repeating letters return -1. Words will be separated by spaces. 

function LetterCountI($str) {  
	$words = explode(' ', $str);
	$returnWord = ' ';
	$sameLetters = 0;

	foreach ($words as $word) {
		$characters = str_split($word);
		$counts = array_count_values($characters);

		foreach ($counts as $letter) {
			if($letter > $sameLetters){
				$returnWord = $word;
				$sameLetters = $letter;
			}
		}
	}

	if($sameLetters < 2){
		$returnWord = -1;
	}

	return $returnWord;
         
}

?>