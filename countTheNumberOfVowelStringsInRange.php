<?php 
// https://leetcode.com/problems/count-the-number-of-vowel-strings-in-range

// You are given a 0-indexed array of string words and two integers left and right.
// A string is called a vowel string if it starts with a vowel character and 
// ends with a vowel character where vowel characters are 'a', 'e', 'i', 'o', and 'u'.
// Return the number of vowel strings words[i] where i belongs to the inclusive range [left, right].

class Solution {

    /**
     * @param String[] $words
     * @param Integer $left
     * @param Integer $right
     * @return Integer
     */
    function vowelStrings($words, $left, $right) {
        $vowels = ['a', 'e', 'i', 'o','u'];
        $total = 0;
        foreach($words as $k => $word) {
            if(in_array(str_split($word)[0], $vowels) && in_array(str_split($word)[strlen($word)-1], $vowels) && $k >= $left && $k <= $right) {
                $total++;
            }
        }

        return $total;
    }
}

$sol = new Solution;
$sol->vowelStrings(['are', 'amy', 'u'], 0, 2);
?>