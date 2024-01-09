<?php 
// https://leetcode.com/problems/substrings-of-size-three-with-distinct-characters

// A string is good if there are no repeated characters.
// Given a string s​​​​​, return the number of good substrings of length three in s​​​​​​.
// Note that if there are multiple occurrences of the same substring, every occurrence should be counted.
// A substring is a contiguous sequence of characters in a string.

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function countGoodSubstrings($s) {
        $total = 0;
        
        for($i = 0; $i < strlen($s)-2; $i++) {
            if($s[$i] != $s[$i+1] && $s[$i] != $s[$i+2] && $s[$i+1] != $s[$i+2] ) {
                $total++;
            }
        }

        return $total;
    }
}

$sol = new Solution;
$sol->countGoodSubstrings('aababcabc');
?>