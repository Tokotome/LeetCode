<?php 

// https://leetcode.com/problems/check-if-a-word-occurs-as-a-prefix-of-any-word-in-a-sentence/description

// Given a sentence that consists of some words separated by a single space, and a searchWord, 
// check if searchWord is a prefix of any word in sentence.
// Return the index of the word in sentence (1-indexed) where searchWord is a prefix of this word. 
// If searchWord is a prefix of more than one word, return the index of the first word (minimum index). If there is no such word return -1.
// A prefix of a string s is any leading contiguous substring of s.

class Solution {

    /**
     * @param String $sentence
     * @param String $searchWord
     * @return Integer
     */
    function isPrefixOfWord($sentence, $searchWord) {
        $arr = explode(' ', $sentence);
        
        foreach($arr as $k => $word) {
            if(str_contains($word, $searchWord)) {
                if(substr($word, 0, strlen($searchWord)) == $searchWord) {
                    return $k+1; 
                }
            }
        }

        return -1;
    }
}

$sol = new Solution;
$sol->isPrefixOfWord('this problem is an easy problem', 'pro');
?>