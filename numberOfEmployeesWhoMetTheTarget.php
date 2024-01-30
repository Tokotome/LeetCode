<?php 
// https://leetcode.com/problems/number-of-employees-who-met-the-target/description

// There are n employees in a company, numbered from 0 to n - 1. Each employee i has worked for hours[i] hours in the company.
// The company requires each employee to work for at least target hours.
// You are given a 0-indexed array of non-negative integers hours of length n and a non-negative integer target.
// Return the integer denoting the number of employees who worked at least target hours.

class Solution {

    /**
     * @param Integer[] $hours
     * @param Integer $target
     * @return Integer
     */
    function numberOfEmployeesWhoMetTarget($hours, $target) {
        return count(array_filter($hours, function($hour) use ($target) {
            return $hour >= $target;
        }));
    }
}

$sol = new Solution;
$sol->numberOfEmployeesWhoMetTarget([0,1,2,3,4], 2);
?>