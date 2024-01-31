<?php 
// https://leetcode.com/problems/difference-between-element-sum-and-digit-sum-of-an-array/description

// You are given a positive integer array nums.
// The element sum is the sum of all the elements in nums.
// The digit sum is the sum of all the digits (not necessarily distinct) that appear in nums.
// Return the absolute difference between the element sum and digit sum of nums.
// Note that the absolute difference between two integers x and y is defined as |x - y|.

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function differenceOfSum($nums) {
        $elementSum = array_sum($nums);

        $digitsSum = 0;

        foreach($nums as $num) {
            $digitsSum += array_sum(str_split($num));
        } 

        return $elementSum - $digitsSum;
    }
}

$sol = new Solution;
$sol->differenceOfSum([1,15,6,3]);
?>