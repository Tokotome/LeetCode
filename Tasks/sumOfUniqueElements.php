<?php 
// https://leetcode.com/problems/sum-of-unique-elements/description/

// You are given an integer array nums. The unique elements of an array are the elements that appear exactly once in the array.
// Return the sum of all the unique elements of nums.

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function sumOfUnique($nums) {
        $occurrences = [];

        foreach($nums as $num) {
            if($occurrences[$num] == null) {
                $occurrences[$num] = 1;
            } else {
                $occurrences[$num]++;
            }
        }

        $total = 0;

        foreach($occurrences as $num => $count) {
            if($count == 1) {
                $total += $num;
            }
        }
        
        return $total;
    }
}

$solution = new Solution;
$solution->sumOfUnique([1,2,3,2]);
?>