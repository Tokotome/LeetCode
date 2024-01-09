<?php 
// https://leetcode.com/problems/kth-distinct-string-in-an-array

// A distinct string is a string that is present only once in an array.
// Given an array of strings arr, and an integer k, return the kth distinct string present in arr. 
// If there are fewer than k distinct strings, return an empty string "".
// Note that the strings are considered in the order in which they appear in the array.

class Solution {

    /**
     * @param String[] $arr
     * @param Integer $k
     * @return String
     */
    function kthDistinct($arr, $k) {
        $unique = array_diff($arr, array_diff_assoc($arr, array_unique($arr)));
        sort($unique, SORT_NUMERIC);
        return array_key_exists($k-1, $unique) == true ? $unique[$k-1] : "";
    }
}

$sol = new Solution;
$sol->kthDistinct(["d","b","c","b","c","a"], 2);
?>