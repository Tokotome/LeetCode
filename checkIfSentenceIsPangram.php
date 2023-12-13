<?php 


//https://leetcode.com/problems/check-if-the-sentence-is-pangram/

//A pangram is a sentence where every letter of the English alphabet appears at least once.
//Given a string sentence containing only lowercase English letters, 
//return true if sentence is a pangram, or false otherwise.

function checkIfPangram($sentence) {
    $arr = str_split(strtolower($sentence));
    if(count(array_unique($arr)) < 26) {
        return false;
    } else {
        return true;
    }
}
?>