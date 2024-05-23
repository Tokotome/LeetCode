<?php
// https://leetcode.com/problems/build-array-from-permutation/description

// Given a zero-based permutation nums (0-indexed), build an array ans of the same length where ans[i] = nums[nums[i]] 
// for each 0 <= i < nums.length and return it.
// A zero-based permutation nums is an array of distinct integers from 0 to nums.length - 1 (inclusive).

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function buildArray($nums) {
        $arr = [];

        foreach($nums as $k => $number) {
            $arr[$k] = $nums[$nums[$k]];
        }

        return $arr;
    }
}

$sol = new Solution;
$sol->buildArray([0,2,1,5,3,4]);
?>
