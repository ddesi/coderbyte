<?php

//Have the function LetterChanges(str) take the str parameter being passed and modify it using the following algorithm.
//Replace every letter in the string with the letter following it in the alphabet (ie. c becomes d, z becomes a).
//Then capitalize every vowel in this new string (a, e, i, o, u)
//and finally return this modified string.

function LetterChanges($str) {

    $inputLetters = str_split($str);
    $letters = range('a', 'z');
    $vowels = array('a', 'e', 'i', 'o', 'u');

    foreach ($inputLetters as $index=>$letter) {
        if ($letter == 'z' || $letter == 'Z') {
            $inputLetters[$index] = 'a';
        } elseif (in_array($letter, $letters)) {
            $inputLetters[$index] = ++$letter;
        } else {
            $inputLetters[$index] = $letter;
        }

        if (in_array($inputLetters[$index], $vowels)) {
            $inputLetters[$index] = strtoupper($inputLetters[$index]);
        }
    }

    return implode($inputLetters);
}


?>