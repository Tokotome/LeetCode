<?php 
// https://leetcode.com/problems/valid-anagram/description

// Given two strings s and t, return true if t is an anagram of s, and false otherwise.
// An Anagram is a word or phrase formed by rearranging the letters of a different word or phrase, 
// typically using all the original letters exactly once.

class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isAnagram($s, $t) {
        if(strlen($s) != strlen($t)) {
            return false;
        }
        
        return count_chars($s) == count_chars($t);
    }
}

$sol = new Solution;
$sol->isAnagram('aacc', 'ccac');
?>