<?php 
// https://leetcode.com/problems/sort-the-people

// You are given an array of strings names, and an array heights that consists of distinct positive integers. 
// Both arrays are of length n.For each index i, names[i] and heights[i] denote the name and height of the ith person.
// Return names sorted in descending order by the people's heights.

class Solution {

    /**
     * @param String[] $names
     * @param Integer[] $heights
     * @return String[]
     */
    function sortPeople($names, $heights) {
        $names = array_combine($heights, $names);
        krsort($names);
        return $names;
    }
}

$sol = new Solution;
$sol->sortPeople(["Alice","Bob","Bob"], [155,185,150]);
?>