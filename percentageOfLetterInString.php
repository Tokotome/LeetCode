<?php 
// https://leetcode.com/problems/percentage-of-letter-in-string

// Given a string s and a character letter, return the percentage of characters in s 
//that equal letter rounded down to the nearest whole percent.

class Solution {

    /**
     * @param String $s
     * @param String $letter
     * @return Integer
     */
    function percentageLetter($s, $letter) {
        return floor(substr_count($s, $letter) / strlen($s) * 100); 
    }
}
?>