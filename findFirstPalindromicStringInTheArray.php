<?php 
// https://leetcode.com/problems/find-first-palindromic-string-in-the-array

// Given an array of strings words, return the first palindromic string in the array. 
// If there is no such string, return an empty string "".
// A string is palindromic if it reads the same forward and backward.

class Solution {

    /**
     * @param String[] $words
     * @return String
     */
    function firstPalindrome($words) {
        $funcIsPalindromic = fn($word) => $word == strrev($word);
        $palindromicStrings = array_filter($words, $funcIsPalindromic);
        return array_shift($palindromicStrings) ?? "";
    }
}

$sol = new Solution;
$sol->firstPalindrome(['abc', 'car', 'ada', 'racecar', 'cool']);
?>