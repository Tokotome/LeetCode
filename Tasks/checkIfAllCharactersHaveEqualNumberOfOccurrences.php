<?php 
// https://leetcode.com/problems/check-if-all-characters-have-equal-number-of-occurrences

// Given a string s, return true if s is a good string, or false otherwise.
// A string s is good if all the characters that appear in s have the same number of occurrences (i.e., the same frequency).

class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function areOccurrencesEqual($s) {
        $occurrences = [];

        for($i = 0; $i< strlen($s); $i++) {
            if(array_key_exists($s[$i], $occurrences) == false) {
                $occurrences[$s[$i]] = 1;
            } else {
                $occurrences[$s[$i]]++;
            }
        }
        
        return count(array_unique($occurrences)) == 1 ? true : false; 
    }
}

$sol = new Solution;
$sol->areOccurrencesEqual('aaabb');
?>