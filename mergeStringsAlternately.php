<?php 
// https://leetcode.com/problems/merge-strings-alternately

// You are given two strings word1 and word2. Merge the strings by adding letters in alternating order, 
// starting with word1. If a string is longer than the other, append the additional letters onto the end of the merged string.

class Solution {

    /**
     * @param String $word1
     * @param String $word2
     * @return String
     */
    function mergeAlternately($word1, $word2) {
        $str = [];
        for($i = 0; $i < max([strlen($word1), strlen($word2)]); $i++)
            $str[] = $word1[$i] . $word2[$i];

        return implode("", $str);
    }
}

$sol = new Solution;
$sol->mergeAlternately('cdf', 'a');

?>