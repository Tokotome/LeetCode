<?php 
// https://leetcode.com/problems/count-common-words-with-one-occurrence/description

// Given two string arrays words1 and words2, return the number of strings that appear exactly once in each of the two arrays.

class Solution {

    /**
     * @param String[] $words1
     * @param String[] $words2
     * @return Integer
     */
    function countWords($words1, $words2) {
        $occurrences = array_count_values($words1);
        $occurrences2 = array_count_values($words2);
        
        $result = [];
        foreach($occurrences as $word => $count) {
            if($count == 1 && $occurrences2[$word] == 1 && in_array($word, $words2)) {
                $result[] = $word;
            }
        }

        return count($result);
    }
}

$sol = new Solution;
$sol->countWords(["a","ab"], ["a","a","a","ab"]);
?>