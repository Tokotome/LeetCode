<?php 

// https://leetcode.com/problems/length-of-last-word

// Given a string s consisting of words and spaces, 
//return the length of the last word in the string.
// A word is a maximal 
// substring
//  consisting of non-space characters only.

function lengthOfLastWord($input) {
    $splitted = explode(' ', trim($input));
    return strlen(end($splitted));
}
?>