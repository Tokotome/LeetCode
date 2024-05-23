<?php 
// https://leetcode.com/problems/largest-odd-number-in-string/description

// You are given a string num, representing a large integer. 
// Return the largest-valued odd integer (as a string) that is a non-empty substring of num, 
// or an empty string "" if no odd integer exists.
// A substring is a contiguous sequence of characters within a string.

class Solution {

    /**
     * @param String $num
     * @return String
     */
    function largestOddNumber($num) {
        for ($index = strlen($num)- 1; $index >= 0; $index--) {
            if (intval($num[$index]) % 2 === 1) {
                return substr($num, 0, $index + 1);
            }
        }
        return "";
    }
}

$sol = new Solution;
$sol->largestOddNumber('3278');
?>