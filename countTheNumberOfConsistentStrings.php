<?php 
// https://leetcode.com/problems/count-the-number-of-consistent-strings

// You are given a string allowed consisting of distinct characters and an array of strings words. 
// A string is consistent if all characters in the string appear in the string allowed.
// Return the number of consistent strings in the array words.

class Solution {

    /**
     * @param String $allowed
     * @param String[] $words
     * @return Integer
     */
    function countConsistentStrings($allowed, $words) {
        $total = 0;

        foreach ($words as $word){
            $letters = str_split($word);
            $total++;
            foreach ($letters as $letter){
                if (!str_contains($allowed, $letter)){
                    $total--;
                    break;
                }
            }
        }

        return $total;
    }
}

$sol = new Solution;
$sol->countConsistentStrings('ab', ["ad","bd","aaab","baa","badab"]);
?>