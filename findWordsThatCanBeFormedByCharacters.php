<?php 
// https://leetcode.com/problems/find-words-that-can-be-formed-by-characters/description

// You are given an array of strings words and a string chars.
// A string is good if it can be formed by characters from chars (each character can only be used once).
// Return the sum of lengths of all good strings in words.

class Solution {

    /**
     * @param String[] $words
     * @param String $chars
     * @return Integer
     */
    function countCharacters($words, $chars) {
        $charCountArray = array_count_values(str_split($chars));
        $result         = 0;

        foreach($words as $word)
        {
            $wordCountArray = array_count_values(str_split($word));           
            $valid          = true;
            
            foreach ($wordCountArray as $char => $charCount) {
                if (!isset($charCountArray[$char]) || $charCountArray[$char] < $charCount) {
                    $valid = false;
                    break;
                }
            }
            
            if ($valid) {
                $result += strlen($word);
            }
        }

        return $result;
    }
}

$sol = new Solution;
$sol->countCharacters(["cat","bt","hat","tree"], 'atach');
?>