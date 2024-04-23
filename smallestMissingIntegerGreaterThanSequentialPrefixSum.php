<?php 
// https://leetcode.com/problems/smallest-missing-integer-greater-than-sequential-prefix-sum/description/

// You are given a 0-indexed array of integers nums.
// A prefix nums[0..i] is sequential if, for all 1 <= j <= i, nums[j] = nums[j - 1] + 1. In particular, the prefix consisting only of nums[0] is sequential.
// Return the smallest integer x missing from nums such that x is greater than or equal to the sum of the longest sequential prefix.se.

class Solution {
    function missingInteger($nums) {
        $prefixSum = $nums[0];
        for($i=1;$i<count($nums);$i++){
            if ($nums[$i]==$nums[$i-1]+1){
                $prefixSum += $nums[$i];
            }
            else{
                break;
            }
        }
        
        while (in_array($prefixSum,$nums)){
            $prefixSum++;
        }
        
        return $prefixSum;
    }
}

$solution = new Solution;
$solution->missingInteger([29,30,31,32,33,34,35,36,37]);
?>

