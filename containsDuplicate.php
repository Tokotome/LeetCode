<?php 
// https://leetcode.com/problems/contains-duplicate
//Given an integer array nums, return true if any value appears at least twice in the array, 
//and return false if every element is distinct.

    function containsDuplicate($nums) {
        $uniques = array_unique($nums);
        return count($uniques) != count($nums) ? true : false;
    }
?>

