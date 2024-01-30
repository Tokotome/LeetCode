<?php 
// https://leetcode.com/problems/how-many-numbers-are-smaller-than-the-current-number/description

// Given the array nums, for each nums[i] find out how many numbers in the array are smaller than it. 
// That is, for each nums[i] you have to count the number of valid j's such that j != i and nums[j] < nums[i].
// Return the answer in an array.

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function smallerNumbersThanCurrent($nums) {
        $sorted = $nums;
        sort($sorted);
        for($i=0;$i<count($sorted);$i++){
            $nums[$i] = array_search($nums[$i],$sorted);
        }
        return $nums;
    }
}

$sol = new Solution;
$sol->smallerNumbersThanCurrent([8,1,2,2,3]);
?>