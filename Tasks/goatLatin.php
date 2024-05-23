<?php 
// https://leetcode.com/problems/goat-latin/description

// You are given a string sentence that consist of words separated by spaces. Each word consists of lowercase and uppercase letters only.
// We would like to convert the sentence to "Goat Latin" (a made-up language similar to Pig Latin.) The rules of Goat Latin are as follows:
// If a word begins with a vowel ('a', 'e', 'i', 'o', or 'u'), append "ma" to the end of the word.
// For example, the word "apple" becomes "applema".
// If a word begins with a consonant (i.e., not a vowel), remove the first letter and append it to the end, then add "ma".
// For example, the word "goat" becomes "oatgma".
// Add one letter 'a' to the end of each word per its word index in the sentence, starting with 1.
// For example, the first word gets "a" added to the end, the second word gets "aa" added to the end, and so on.
// Return the final sentence representing the conversion from sentence to Goat Latin.

class Solution {

    /**
     * @param String $sentence
     * @return String
     */
    function toGoatLatin($sentence) {
        $words = explode(' ', $sentence);
        $vowels = ['a', 'e', 'i', 'o','u', 'A', 'E', 'I', 'O','U'];
        
        foreach($words as $k => &$word) {
            if(ctype_alpha($word) == false) {
                Throw new Exception ('The input contains a non letter character!');
            }
            
            $firstLetter = str_split($word)[0];
            
            if(in_array($firstLetter, $vowels)) {
                $word.= 'ma';
            } else {
                $word = substr($word, 1);
                $word.= $firstLetter;
                $word.= 'ma';
            }
            
            $word.= str_repeat('a', $k+1);
        }

        $words = implode(' ', $words);
        return $words;
    }
}

$sol = new Solution;
$sol->toGoatLatin('Each word consists of lowercase and uppercase letters only');
?>