<?php 
// https://leetcode.com/problems/number-of-strings-that-appear-as-substrings-in-word

// Given an array of strings patterns and a string word, return the number of strings in patterns that exist as a substring in word.
// A substring is a contiguous sequence of characters within a string.

class Solution {

    /**
     * @param String[] $patterns
     * @param String $word
     * @return Integer
     */
    function numOfStrings($patterns, $word) {
        $total = 0;
        
        foreach($patterns as $pattern) {
            if(strpos($word,$pattern) !== false) {
                $total++;
            }
        }
        return $total;
    }
}

$sol = new Solution;
$sol->numOfStrings(['a','abc','bc','d'], 'abc');
?>