<?php 
// https://leetcode.com/problems/check-if-all-the-integers-in-a-range-are-covered/description/

// You are given a 2D integer array ranges and two integers left and right. Each ranges[i] = [starti, endi] represents an inclusive interval between starti and endi.
// Return true if each integer in the inclusive range [left, right] is covered by at least one interval in ranges. Return false otherwise.
// An integer x is covered by an interval ranges[i] = [starti, endi] if starti <= x <= endi.

class Solution
{

  /**
   * @param Integer[][] $ranges * @param Integer $left
   * @param Integer $right * @return Boolean */ public function isCovered($ranges, $left, $right)
    {
        for($i=$left; $i<=$right; $i++) {
            foreach ($ranges as $range) {
                if (($i >= $range[0]) && ($i <= $range[1])) {
                    continue;
                }
            }
            return false;
        }
        return true;
    }
}

$solution = new Solution;
$solution->isCovered([[1,2],[3,4],[5,6]], 2, 5);
?>

