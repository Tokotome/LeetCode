<?php 
// https://leetcode.com/problems/check-if-two-string-arrays-are-equivalent

//Given two string arrays word1 and word2, return true if the two arrays represent the same string, and false otherwise.
//A string is represented by an array if the array elements concatenated in order forms the string.

class Solution {

    /**
     * @param String[] $word1
     * @param String[] $word2
     * @return Boolean
     */
    function arrayStringsAreEqual($word1, $word2) {
        $result1 = '';
        $result2 = '';

        foreach($word1 as $str) {
            $result1 .= $str;
        }

        foreach($word2 as $str2) {
            $result2 .= $str2;
        }

        return $result1 == $result2 ? true : false;
    }
}

$sol = new Solution;
$sol->arrayStringsAreEqual(["ab", "c"], ["a", "bc"]);
?>