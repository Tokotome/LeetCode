<?php 
// https://leetcode.com/problems/maximum-odd-binary-number

// You are given a binary string s that contains at least one '1'.

// You have to rearrange the bits in such a way that the resulting binary number 
// is the maximum odd binary number that can be created from this combination.
// Return a string representing the maximum odd binary number that can be created from the given combination.
// Note that the resulting string can have leading zeros.

class Solution {

    /**
     * @param String $s
     * @return String
     */
    function maximumOddBinaryNumber($s) {
        $occurrences = array_count_values(str_split($s));
        $largest = str_repeat('1', $occurrences[1]-1);
        $largest .= str_repeat('0', $occurrences[0]);
        $largest .= '1';
        return $largest;
    }
}

$sol = new Solution;
$sol->maximumOddBinaryNumber('0111');
?>