<?php 
// https://leetcode.com/problems/count-number-of-pairs-with-absolute-difference-k/description

// Given an integer array nums and an integer k, return the number of pairs (i, j) where i < j such that |nums[i] - nums[j]| == k.
// The value of |x| is defined as:
// x if x >= 0.
// -x if x < 0.

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer
     */
    function countKDifference($nums, $k) {
        $total = 0;
        
        for($i=0; $i< count($nums)-1; $i++) {
            for($j=$i+1; $j< count($nums); $j++) {
                if($nums[$i] - $nums[$j] == $k || $nums[$j] - $nums[$i] == $k) {
                    $total++;
                }
            }
        }   

        return $total;
    }
}

$sol = new Solution;
$sol->countKDifference([10,2,10,9,1,6,8,9,2,8], 5);
?>