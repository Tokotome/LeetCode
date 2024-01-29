<?php 
// https://leetcode.com/problems/shuffle-the-array/description

// Given the array nums consisting of 2n elements in the form [x1,x2,...,xn,y1,y2,...,yn].
// Return the array in the form [x1,y1,x2,y2,...,xn,yn].

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $n
     * @return Integer[]
     */
    function shuffle($nums, $n) {
        $firstHalf = array_slice($nums, 0, $n);
        $secondHalf = array_slice($nums, $n);
        
        $result = [];
        
        for($i=0; $i<count($firstHalf); $i++) {
            array_push($result, $firstHalf[$i], $secondHalf[$i]);
        }
        
        return $result;
    }
}

 $solution = new Solution;
 $solution->shuffle([2,5,1,3,4,7], 3);

?>