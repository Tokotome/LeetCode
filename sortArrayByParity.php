<?php 
// https://leetcode.com/problems/sort-array-by-parity/description/

// Given an integer array nums, move all the even integers at the beginning of the array followed by all the odd integers.
// Return any array that satisfies this condition.

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function sortArrayByParity($nums) {
        $odds = [];
        $evens = [];

        foreach($nums as $num) {
            if($num % 2 == 0) {
                $evens[] = $num;
            } else {
                $odds[] = $num;
            }
        }

        $output = [];

        foreach($evens as $even) {
            $output[] = $even;
        }

        foreach($odds as $odd) {
            $output[] = $odd;
        }

        return $output;
    }
}

$solution = new Solution;
$solution->sortArrayByParity([3,1,2,4]);
?>