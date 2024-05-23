<?php 
// https://leetcode.com/problems/maximum-number-of-balloons/description

// Given a string text, you want to use the characters of text to form as many instances of the word "balloon" as possible.
// You can use each character in text at most once. Return the maximum number of instances that can be formed.

class Solution {

    /**
     * @param String $text
     * @return Integer
     */
    function maxNumberOfBalloons($text) {
        $balloon = array_count_values(str_split("balloon"));
        $chars = array_count_values(str_split($text));
        foreach($balloon as $char => $count)
            $balloon[$char] = floor($chars[$char] / $count);
        
        return min($balloon);
    }
}

$sol = new Solution;
$sol->maxNumberOfBalloons('loonbalxballpoon');
?>