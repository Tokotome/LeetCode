<?php 
// https://leetcode.com/problems/capitalize-the-title/description

// You are given a string title consisting of one or more words separated by a single space, 
// where each word consists of English letters. Capitalize the string by changing the capitalization of each word such that:
// If the length of the word is 1 or 2 letters, change all letters to lowercase.
// Otherwise, change the first letter to uppercase and the remaining letters to lowercase.
// Return the capitalized title.

class Solution {

    /**
     * @param String $title
     * @return String
     */
    function capitalizeTitle($title) {
        $words = explode(' ', $title);
        
        foreach($words as &$word) {
            if(strlen($word) <= 2) {
                $word = strtolower($word);
            } else {
                $word = strtolower($word);
                $word = ucfirst($word);
            }
        }
        
        return implode(' ', $words);
    }
}

$sol = new Solution;
$sol->capitalizeTitle('capiTalIze tHe titLe aS');
?>