<?php 
// https://leetcode.com/problems/find-target-indices-after-sorting-array/description/

// You are given a 0-indexed integer array nums and a target element target.
// A target index is an index i such that nums[i] == target.
// Return a list of the target indices of nums after sorting nums in non-decreasing order. If there are no target indices, return an empty list. 
//The returned list must be sorted in increasing order.

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function targetIndices($nums, $target) {
        $count = 0;

        foreach($nums as $num) {
            $count++;
        }
        
        for($i=0; $i<$count; $i++) {
            for($j=0; $j<$count-1; $j++) {
                if($nums[$j] > $nums[$j+1]) {
                    $temp = $nums[$j];
                    $nums[$j] = $nums[$j+1];
                    $nums[$j+1] = $temp;
                }
            } 
        }
        
        $output = [];
        
        foreach($nums as $k => $num) {
            if($num == $target) {
                $output[] = $k;
            }
        }
        
        return $output;
    }
}

$solution = new Solution;
$solution->targetIndices([1,2,5,2,3], 2);
?>

