<?php 

// https://leetcode.com/problems/uncommon-words-from-two-sentences/description

// A sentence is a string of single-space separated words where each word consists only of lowercase letters.
// A word is uncommon if it appears exactly once in one of the sentences, and does not appear in the other sentence.
// Given two sentences s1 and s2, return a list of all the uncommon words. You may return the answer in any order.

class Solution {

    /**
     * @param String $s1
     * @param String $s2
     * @return String[]
     */
    function uncommonFromSentences($s1, $s2) {
        $arr = array_merge(explode(' ',$s1), explode(' ',$s2));
        $arr = array_count_values($arr);
        
        $uniques = array_keys(array_filter($arr, function ($value) {
            return $value === 1;
        }));
        
        return $uniques;
    }
}

$sol = new Solution;
$sol->uncommonFromSentences('s z z z s', 's z ejt');
?>