<?php 

// https://leetcode.com/problems/number-of-good-pairs/description

// Given an array of integers nums, return the number of good pairs.
// A pair (i, j) is called good if nums[i] == nums[j] and i < j.

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function numIdenticalPairs($nums) {
        $totalPairs = 0;
        
        for($i=0; $i< count($nums); $i++) {
            for($j=1; $j<= count($nums)-1; $j++) {
                if($nums[$i] == $nums[$j] && $i < $j) {
                    $totalPairs++;
                }
            }   
        }

        return $totalPairs;
    }
}

$sol = new Solution;
$sol->numIdenticalPairs([1,2,3,1,1,3]);

?>