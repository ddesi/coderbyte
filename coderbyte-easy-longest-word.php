<?php 

// Have the function LongestWord(sen) take the sen parameter being passed and return the largest word in the string. If there are two or more words that are the same length, return the first word from the string with that length. Ignore punctuation and assume sen will not be empty.

function LongestWord($sen) {  
    $words = explode(' ', $sen);
    $index = 0;
    $maxLen = 0;
    
    foreach($words as $k=>$v) {
        $v = preg_replace('/[^A-Za-z0-9-]/', '', $v);
        $length = strlen($v);
        
        if($length > $maxLen) {
            $maxLen = $length;
            $index = $k;
        }
    }
    
    return $words[$index]; 
         
}

echo LongestWord('Find the longest word');  

?>