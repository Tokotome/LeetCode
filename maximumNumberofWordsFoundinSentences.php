<?php 
// https://leetcode.com/problems/maximum-number-of-words-found-in-sentences

// A sentence is a list of words that are separated by a single space with no leading or trailing spaces.
// You are given an array of strings sentences, where each sentences[i] represents a single sentence.
// Return the maximum number of words that appear in a single sentence.

class Solution {

    /**
     * @param String[] $sentences
     * @return Integer
     */
    function mostWordsFound($sentences) {
        $largestCount = 0;

        foreach($sentences as $k => $v) {
            $count = count(explode(' ',$v));
            if($count >= $largestCount) {
                $largestCount = $count;
            }
        }
        return $largestCount;
    }
}

$sol = new Solution;
$sol->mostWordsFound(["please wait", "continue to fight", "continue to win"]);
?>