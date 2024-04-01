<?php 
//https://leetcode.com/problems/separate-the-digits-in-an-array/

// Given an array of positive integers nums, return an array answer that consists of the digits of each integer in nums after separating them in the same order they appear in nums.
// To separate the digits of an integer is to get all the digits it has in the same order.
// For example, for the integer 10921, the separation of its digits is [1,0,9,2,1].

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function separateDigits($nums) {
        $output = [];
        foreach ($nums as $num) {
            $digits = [];
            while ($num > 0) {
                $digit = $num % 10;
                array_unshift($digits, $digit);
                $num = (int)($num / 10);
            }
            foreach ($digits as $digit) {
                $output[] = $digit;
            }
        }
        return $output;
    }
}

$solution = new Solution;
$solution->separateDigits([1332,678]);
?>