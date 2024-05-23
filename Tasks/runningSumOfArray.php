<?php 
// https://leetcode.com/problems/running-sum-of-1d-array/description

// Given an array nums. We define a running sum of an array as runningSum[i] = sum(nums[0]…nums[i]).
// Return the running sum of nums.

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function runningSum($nums) {
        $sum = 0;

        for($i=0; $i<count($nums); $i++) {
            $sum += $nums[$i];
            $arr[] = $sum;
        }
        
        return $arr;
    }
}

$sol = new Solution;
$sol->runningSum([1,2,3,4]);
?>