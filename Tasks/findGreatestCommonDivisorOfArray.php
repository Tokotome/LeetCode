<?php 
// https://leetcode.com/problems/find-greatest-common-divisor-of-array/description/

//Given an integer array nums, return the greatest common divisor of the smallest number and largest number in nums.
//The greatest common divisor of two numbers is the largest positive integer that evenly divides both numbers.

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function findGCD($nums) {
        $count = 0;

        foreach($nums as $num) {
            $count++;
        }

        //sort the array
        for($i=0; $i<$count; $i++) {
            for($j=0; $j<$count-1; $j++) {
                if($nums[$j] > $nums[$j+1]) {
                    $temp = $nums[$j];
                    $nums[$j] = $nums[$j+1];
                    $nums[$j+1] = $temp;
                }
            }
        }

        $smallest = $nums[0];
        $largest = $nums[$count-1];

        $divider = 1;
        
        while($divider <= $largest) {
            if($smallest % $divider == 0 && $largest % $divider == 0) {
                $largestDivider = $divider;
            }
            $divider++;
        }

        return $largestDivider;
    }
}


$solution = new Solution;
$solution->findGCD([2,5,6,9,10]);
?>