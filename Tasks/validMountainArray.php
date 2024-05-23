<?php 
// https://leetcode.com/problems/valid-mountain-array/description/

// Given an array of integers arr, return true if and only if it is a valid mountain array.
// Recall that arr is a mountain array if and only if:
// arr.length >= 3
// There exists some i with 0 < i < arr.length - 1 such that:
// arr[0] < arr[1] < ... < arr[i - 1] < arr[i] 
// arr[i] > arr[i + 1] > ... > arr[arr.length - 1]


class Solution {

    /**
     * @param Integer[] $arr
     * @return Boolean
     */
    function validMountainArray($arr) {
        $count = count($arr);
        
        for($i=0; $i < $count; $i++) {
            if($arr[$i+1] > $arr[$i]) {
                $highestPointIndex = $i+1;
            }
        }
        
        if($highestPointIndex + 1 == $count) {
            return false;
        }

        for($j=0; $j < $highestPointIndex; $j++) {
            if ($arr[$j] >= $arr[$j+1]) {
                return false;
            }
        }

        for ($j = $highestPointIndex; $j < $count - 1; $j++) {
            if ($arr[$j] <= $arr[$j+1]) {
                return false;
            }
        }

        return true;
    }
}

$solution = new Solution;
$solution->validMountainArray([0,3,2,1]);

?>

