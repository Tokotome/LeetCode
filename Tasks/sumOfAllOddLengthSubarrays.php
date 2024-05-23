<?php 
// https://leetcode.com/problems/sum-of-all-odd-length-subarrays/description/

// Given an array of positive integers arr, return the sum of all possible odd-length subarrays of arr.
// A subarray is a contiguous subsequence of the array.

use function PHPSTORM_META\elementType;

class Solution {

    /**
     * @param Integer[] $arr
     * @return Integer
     */
    function sumOddLengthSubarrays($arr) {
        $count = 0;
        foreach($arr as $element) {
            $count++;
        }
        $total = 0;

        for ($start = 0; $start < $count; $start++) {
            for ($length = 1; $start + $length <= $count; $length += 2) {
                for ($i = $start; $i < $start + $length; $i++) {
                    $total += $arr[$i];
                }
            }
        }

        return $total;
    }
}

$solution = new Solution;
$solution->sumOddLengthSubarrays([10,11,12,13,14]);
?>