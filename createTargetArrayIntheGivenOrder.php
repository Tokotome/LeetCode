<?php 
// https://leetcode.com/problems/create-target-array-in-the-given-order/description

// Given two arrays of integers nums and index. Your task is to create target array under the following rules:
// Initially target array is empty.
// From left to right read nums[i] and index[i], insert at index index[i] the value nums[i] in target array.
// Repeat the previous step until there are no elements to read in nums and index.
// Return the target array.
// It is guaranteed that the insertion operations will be valid.

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer[] $index
     * @return Integer[]
     */
    function createTargetArray($nums, $index) {
        $arr = [];

        foreach($nums as $k=>$number) {
            array_splice($arr, $index[$k], 0, $nums[$k]);
        }

        return $arr;
    }
}

$sol = new Solution;
$sol->createTargetArray([0,1,2,3,4], [0,1,2,2,1]);
?>