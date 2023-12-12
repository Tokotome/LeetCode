<?php 
// https://leetcode.com/problems/palindrome-number
//Given an integer x, return true if x is a  palindrome, and false otherwise.

function isPalindrome($int) {
    $$int = strval($int);
    $array = str_split($int);
    $arrayReverse = array_reverse($array);

    if($array === $arrayReverse) {
        return true;
    } else {
        return false;
    }     
}
?>

