<?php 
// https://leetcode.com/problems/find-the-difference-of-two-arrays

// Given two 0-indexed integer arrays nums1 and nums2, return a list answer of size 2 where:
// answer[0] is a list of all distinct integers in nums1 which are not present in nums2.
// answer[1] is a list of all distinct integers in nums2 which are not present in nums1.
// Note that the integers in the lists may be returned in any order.

class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Integer[][]
     */
    function findDifference($nums1, $nums2) {
        $diff1 = [];
        $diff2 = [];
        foreach($nums1 as $num1) {
            $found = false;
            foreach ($nums2 as $num2) {
                if ($num1 === $num2) {
                    $found = true;
                    break;
                }
            }
            if (!$found) {
                $exists = false;
                foreach ($diff1 as $diffNum) {
                    if ($diffNum === $num1) {
                        $exists = true;
                        break;
                    }
                }
                if (!$exists) {
                    $diff1[] = $num1;
                }
            }
        }
        
        
        foreach($nums2 as $num2) {
            $found = false;
            foreach ($nums1 as $num1) {
                if ($num2 === $num1) {
                    $found = true;
                    break;
                }
            }
            if (!$found) {
                $exists = false;
                foreach ($diff2 as $diffNum2) {
                    if ($diffNum2 === $num2) {
                        $exists = true;
                        break;
                    }
                }
                if (!$exists) {
                    $diff2[] = $num2;
                }
            }
        }
        
        return [$diff1, $diff2];
    }   
}

$solution = new Solution;
$solution->findDifference([1,2,3], [4,2,6]);
?>