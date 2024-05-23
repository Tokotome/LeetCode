<?php 
// https://leetcode.com/problems/count-prefixes-of-a-given-string

// You are given a string array words and a string s, where words[i] and s comprise only of lowercase English letters.
// Return the number of strings in words that are a prefix of s.
// A prefix of a string is a substring that occurs at the beginning of the string. 
// A substring is a contiguous sequence of characters within a string.

class Solution {

    /**
     * @param String[] $words
     * @param String $s
     * @return Integer
     */
    function countPrefixes($words, $s) {
        $total = 0;

        foreach($words as $word) {
            if(strpos($s, $word) === 0) {
                $total++;  
            }
        }

        return $total;
    }
}

$sol = new Solution;
$sol->countPrefixes(['a','b','c','ab','bc','abc'], 'abc');

 
?>