<?php

session_start();

$inputString = $_GET['inputString'];
            
$str_lower = strtolower($inputString);

$str_rev = strrev($str_lower);

$isPalindrome = $str_rev == $inputString;

$vowel_count = 0;
$vowels = "aeiou";

for ($x=0; $x<strlen($str_lower); $x++) {
   for($y=0; $y<strlen($vowels); $y++) {
    if($vowels[$y]==$str_lower[$x]){
        $vowel_count++;
    }
   }
}

$shift= 1;
$shiftedString = "";

for($i=0; $i<strlen($str_lower); $i++) {
    $ascii = ord($str_lower[$i]);
    $shiftedChar = chr($ascii + $shift);

    $shiftedString .= $shiftedChar;
}

$_SESSION['results'] = [
    'inputString' => $inputString,
    'str_lower' => $str_lower,
    'str_rev' => $str_rev,
    'isPalindrome' => $isPalindrome,
    'vowel_count' => $vowel_count,
    'shiftedString' => $shiftedString,

];


#redirect
header('Location: index.php');