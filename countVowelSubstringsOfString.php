<?php 
// https://leetcode.com/problems/count-vowel-substrings-of-a-string/description

// A substring is a contiguous (non-empty) sequence of characters within a string.
// A vowel substring is a substring that only consists of vowels ('a', 'e', 'i', 'o', and 'u') 
// and has all five vowels present in it.
// Given a string word, return the number of vowel substrings in word.

class Solution {

    /**
     * @param String $word
     * @return Integer
     */
    function countVowelSubstrings($word) {
        $len = strlen($word);
        $max = $len - 5;
        $times = 0;
        for ($i = 0; $i <= $max; $i++) {
            $l = $len - $i;
            while ($l > 4) {
                count(array_unique($words = str_split(substr($word, $i, $l--)))) < 6
                    && count(array_unique(array_intersect($words, ['a', 'e', 'i', 'o', 'u']))) === 5
                    && $times++;
            }
        }
        return $times;
    }
}

$sol = new Solution;
$sol->countVowelSubstrings('aeiouu');
?>