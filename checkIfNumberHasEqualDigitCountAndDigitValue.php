<?php 

// https://leetcode.com/problems/check-if-number-has-equal-digit-count-and-digit-value

// You are given a 0-indexed string num of length n consisting of digits.
// Return true if for every index i in the range 0 <= i < n, the digit i occurs num[i] times in num, otherwise return false.

class Solution {

    /**
     * @param String $num
     * @return Boolean
     */
    function digitCount($num) {
        $numbers = str_split($num);
        $occurences = array_count_values($numbers);

        foreach ($numbers as $index => $freq) { 
            if ($occurences[$index] != intval($freq)) {
                return false;
            } 
        }
        return true;
    }
}

$sol = new Solution;
$sol->digitCount('1210');
?>