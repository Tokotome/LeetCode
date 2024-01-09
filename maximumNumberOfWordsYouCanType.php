<?php 
// https://leetcode.com/problems/maximum-number-of-words-you-can-type

//There is a malfunctioning keyboard where some letter keys do not work. All other keys on the keyboard work properly.
// Given a string text of words separated by a single space (no leading or trailing spaces) and a string brokenLetters 
// of all distinct letter keys that are broken, 
// return the number of words in text you can fully type using this keyboard.

class Solution {

    /**
     * @param String $text
     * @param String $brokenLetters
     * @return Integer
     */
    function canBeTypedWords($text, $brokenLetters) {
        $letters = str_split($brokenLetters);
        $total = 0;

        foreach(explode(' ', $text) as $word) {
            if (str_replace($letters, '', $word) == $word)
                $total++;
            }
            
            return $total;
    }
}

$sol = new Solution;
$sol->canBeTypedWords('hello world', 'ad');
?>