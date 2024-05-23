<?php 
// https://leetcode.com/problems/string-matching-in-an-array/description

// Given an array of string words, return all strings in words that is a substring of another word. 
// You can return the answer in any order.
// A substring is a contiguous sequence of characters within a string

class Solution {

    /**
     * @param String[] $words
     * @return String[]
     */
    function stringMatching($words) {
        $substrings = [];
        
        foreach($words as $word) {
            for($i=0; $i < count($words); $i++) {
                if(str_contains($words[$i], $word) && strlen($word) < strlen($words[$i])) {
                    $substrings[] = $word;
                    break;
                }
            }
        }

        return $substrings;
    }
}

$sol = new Solution;
$sol->stringMatching(["mass","as","hero","superhero"]);
?>