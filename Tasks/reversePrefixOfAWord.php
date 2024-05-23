<?php 
// https://leetcode.com/problems/reverse-prefix-of-word

// Given a 0-indexed string word and a character ch, reverse the segment of word that starts at index 0 
// and ends at the index of the first occurrence of ch (inclusive). 
// If the character ch does not exist in word, do nothing.
// For example, if word = "abcdefd" and ch = "d", then you should reverse the segment that starts at 0 and ends at 3 (inclusive). 
// The resulting string will be "dcbaefd".

class Solution {

    /**
     * @param String $word
     * @param String $ch
     * @return String
     */
    function reversePrefix($word, $ch) {
        if(strpos($word, $ch) === false) {
            return $word;
        } else {
            $index = strpos($word, $ch);
            $reversed = strrev(substr($word, 0, $index+1));
            $rest = substr($word, $index+1, strlen($word)-1);
            return $reversed.$rest;  
        }
    }
}

$sol = new Solution;
$sol->reversePrefix('abcdefd', 'd');
?>