<?php 

// https://leetcode.com/problems/most-frequent-even-element
//Given an integer array nums, return the most frequent even element.
//If there is a tie, return the smallest one. If there is no such element, return -1.

function mostFrequentEven($nums) {
    $nums = array_count_values(array_filter($nums, function ($v) {return !($v & 1);}));
    return (count($nums) > 0) ? min(array_keys($nums, max($nums))) : -1;
}

?>