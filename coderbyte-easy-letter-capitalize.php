<?php 

// Have the function LetterCapitalize(str) take the str parameter being passed and capitalize the first letter of each word. Words will be separated by only one space. 

function LetterCapitalize($str) {  
	return ucwords($str);      
}
   
echo LetterCapitalize('hello lovely friends');  

?>