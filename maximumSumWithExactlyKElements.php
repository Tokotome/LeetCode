<?php 
// https://leetcode.com/problems/maximum-sum-with-exactly-k-elements/description

// You are given a 0-indexed integer array nums and an integer k. Your task is to perform the following operation exactly k times in order to maximize your score:
// Select an element m from nums.
// Remove the selected element m from the array.
// Add a new element with a value of m + 1 to the array.
// Increase your score by m.
// Return the maximum score you can achieve after performing the operation exactly k times.

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer
     */
    function maximizeSum($nums, $k) {
        $count = count($nums);
        
        for($i=0; $i < $count; $i++) {
            for($j=0; $j < $count-1; $j++) {
                if ($nums[$j] > $nums[$j+1]) {
                    $temp = $nums[$j+1];
                    $nums[$j+1] = $nums[$j];
                    $nums[$j] = $temp;
                }
            }       
        }
        
        $total = 0;
        $largest = $nums[$count-1];
        
        for($i = 0; $i < $k; $i++) {
            $total += $largest;
            $largest++;
        }

        return $total;
    }
}

$solution = new Solution;
$solution->maximizeSum([5,4,3,2,1], 3);
?>