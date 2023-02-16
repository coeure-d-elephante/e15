<?php 
session_start();

if (isset($_SESSION['results'])) {
    $results = $_SESSION['results'];

    $inputString = $results['inputString'];
    $isPalindrome = $results['isPalindrome'];
    $str_lower = $results['str_lower'];
    $str_rev = $results['str_rev'];
    $vowel_count = $results['vowel_count'];
    $shiftedString = $results['shiftedString'];
    $_SESSION['results'] = null;
}


require 'index-view.php';