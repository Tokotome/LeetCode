<?php 
// https://leetcode.com/problems/check-if-all-the-integers-in-a-range-are-covered/description/

// You are given a 2D integer array ranges and two integers left and right. Each ranges[i] = [starti, endi] represents an inclusive interval between starti and endi.
// Return true if each integer in the inclusive range [left, right] is covered by at least one interval in ranges. Return false otherwise.
// An integer x is covered by an interval ranges[i] = [starti, endi] if starti <= x <= endi.

class Solution {

    /**
     * @param Integer[][] $ranges
     * @param Integer $left
     * @param Integer $right
     * @return Boolean
     */
    function isCovered($ranges, $left, $right) {
        
        $leftRightRange = [];

        for($i=$left; $i<= $right; $i++) {
            $leftRightRange[$i] = 1; 
        }
        
        foreach($ranges as $range) {
            for($j=$range[0]; $j <= $range[1]; $j++) {
                if($leftRightRange[$j]) {
                    unset($leftRightRange[$j]);
                }

                if($this->isEmpty($leftRightRange)) {
                    return true;
                }
            }
        }
        
        return false;
    }

    private function isEmpty($array) {
        foreach ($array as $element) {
            if ($element !== null) {
                return false;
            }
        }
        return true;
    }
}

$solution = new Solution;
$solution->isCovered([[1,2],[3,4],[5,6]], 2, 5);
?>

