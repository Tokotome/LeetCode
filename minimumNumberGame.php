<?php 
// https://leetcode.com/problems/minimum-number-game/description

// You are given a 0-indexed integer array nums of even length and there is also an empty array arr. 
// Alice and Bob decided to play a game where in every round Alice and Bob will do one move. The rules of the game are as follows:
// Every round, first Alice will remove the minimum element from nums, and then Bob does the same.
// Now, first Bob will append the removed element in the array arr, and then Alice does the same.
// The game continues until nums becomes empty.
// Return the resulting array arr.

// Constraints:

// 2 <= nums.length <= 100
// 1 <= nums[i] <= 100
// nums.length % 2 == 0

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function numberGame($nums) {
        $n = count($nums);
        
        for ($i = 0; $i < $n - 1; $i++) {
            for ($j = 0; $j < $n - $i - 1; $j++) {
                if ($nums[$j] > $nums[$j + 1]) {
                    $temp = $nums[$j];
                    $nums[$j] = $nums[$j + 1];
                    $nums[$j + 1] = $temp;
                }
            }
        }
        
        foreach($nums as $k=>$number) {
            if($k % 2 == 0) {
                $nums[$k+1] = $number;
            } else {
                $nums[$k-1] = $number;
            }
        }
        
        return $nums;
    }
}

$solution = new Solution;
$solution->numberGame([5,4,2,3]);
?>