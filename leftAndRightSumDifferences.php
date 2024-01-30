<?php 
// https://leetcode.com/problems/left-and-right-sum-differences/description

// Given a 0-indexed integer array nums, find a 0-indexed integer array answer where:
// answer.length == nums.length.
// answer[i] = |leftSum[i] - rightSum[i]|.
// Where:
// leftSum[i] is the sum of elements to the left of the index i in the array nums. If there is no such element, leftSum[i] = 0.
// rightSum[i] is the sum of elements to the right of the index i in the array nums. If there is no such element, rightSum[i] = 0.

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function leftRightDifference($nums) {
        if(count($nums) < 2) {
            return [0];
        }

        $leftArr = $nums;
        $rightArr = $nums;

        array_shift($rightArr);
        array_pop($leftArr);
        
        $leftTotals[] = 0;

        $leftSum = 0;

        for($i=0; $i<count($leftArr); $i++) {
            $leftSum += $leftArr[$i];
            $leftTotals[] = $leftSum;
        }
        
        $rightTotals[0] = array_sum($rightArr);
        
        $rightSum = array_sum($rightArr);
        
        for($j=0; $j<count($rightArr); $j++) {
            $rightSum = $rightSum - $rightArr[$j];
            
            $rightTotals[] = $rightSum;
        }

        $output = [];
        for($i=0; $i< count($leftTotals); $i++) {
            $output[] = abs($leftTotals[$i] - $rightTotals[$i]);
        }

        return $output;
    }
}

$sol = new Solution;
$sol->leftRightDifference([10,4,8,3]);
?>