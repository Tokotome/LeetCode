<?php 
// https://leetcode.com/problems/remove-all-occurrences-of-a-substring 

// Given two strings s and part, perform the following operation on s until all occurrences of the substring part are removed:
// Find the leftmost occurrence of the substring part and remove it from s.
// Return s after removing all occurrences of part.
// A substring is a contiguous sequence of characters in a string.

class Solution {

    /**
     * @param String $s
     * @param String $part
     * @return String
     */
    function removeOccurrences($s, $part) {
        while (strpos($s, $part) !== false) {
            $index = strpos($s, $part);
            $s = substr($s, 0, $index) . substr($s, $index + strlen($part));
        }
        return $s;
    }
}

$sol = new Solution;
$sol->removeOccurrences('daabcbaabcbc', 'abc');
?>