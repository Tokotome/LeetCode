<?php 
// https://leetcode.com/problems/count-pairs-whose-sum-is-less-than-target/description

// Given a 0-indexed integer array nums of length n and an integer target, 
// return the number of pairs (i, j) where 0 <= i < j < n and nums[i] + nums[j] < target.

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function countPairs($nums, $target) {
        $total = 0;
        
        for($i=0; $i<count($nums); $i++) {
            for($j=1; $j< count($nums); $j++) {
                if($nums[$i]+$nums[$j] < $target) {
                    $total++;
                }
            }
        }

        return $total;
    }
}

$sol = new Solution;
$sol->countPairs([-1,1,2,3,1], 2);
?>