<?php 
// https://leetcode.com/problems/reverse-string

// Write a function that reverses a string. The input string is given as an array of characters s.
// You must do this by modifying the input array in-place with O(1) extra memory.

class Solution {

    /**
     * @param String[] $s
     * @return NULL
     */
    function reverseString(&$s) {
        return $s = array_reverse($s);
        
    }
}

$sol = new Solution;
$sol->reverseString(["h","e","l","l","o"])
?>