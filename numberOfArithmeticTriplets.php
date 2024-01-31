<?php 
// https://leetcode.com/problems/number-of-arithmetic-triplets/description

// You are given a 0-indexed, strictly increasing integer array nums and a positive integer diff. A triplet (i, j, k) 
//is an arithmetic triplet if the following conditions are met:
//i < j < k,
//nums[j] - nums[i] == diff, and
//nums[k] - nums[j] == diff.
//Return the number of unique arithmetic triplets.

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $diff
     * @return Integer
     */
    function arithmeticTriplets($nums, $diff) {
        $total = 0;

        for($i=count($nums)-1; $i > 1; $i--) {
            for($j=count($nums)-2; $j >= 1; $j--) {
                for($k=count($nums)-3; $k >= 0; $k--) {
                    if($nums[$i] > $nums[$j] && $nums[$j] > $nums[$k]) {
                        if($nums[$i] - $nums[$j] == $diff && $nums[$j] - $nums[$k] == $diff) {
                            $total++;
                        }
                    }
                }
            }
        }
        return $total;
    }
}

$sol = new Solution;
$sol->arithmeticTriplets([0,1,4,6,7,10], 3);
?>