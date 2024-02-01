<?php 
// https://leetcode.com/problems/find-common-elements-between-two-arrays/description/

// You are given two 0-indexed integer arrays nums1 and nums2 of sizes n and m, respectively.
// Consider calculating the following values:
// The number of indices i such that 0 <= i < n and nums1[i] occurs at least once in nums2.
// The number of indices i such that 0 <= i < m and nums2[i] occurs at least once in nums1.
// Return an integer array answer of size 2 containing the two values in the above order.

class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Integer[]
     */
    function findIntersectionValues($nums1, $nums2) {
        $arr[] = count($nums1) - count(array_diff($nums1, $nums2));
        $arr[] = count($nums2) - count(array_diff($nums2, $nums1));
        return $arr;
    }
}

$sol = new Solution;
$sol->findIntersectionValues( [4,3,2,3,1], [2,2,5,2,3,6])
?>