<?php 
// https://leetcode.com/problems/check-if-word-equals-summation-of-two-words

// The letter value of a letter is its position in the alphabet starting from 0 (i.e. 'a' -> 0, 'b' -> 1, 'c' -> 2, etc.).
// The numerical value of some string of lowercase English letters s is the concatenation of the letter values of each letter in s, 
// which is then converted into an integer.
// For example, if s = "acb", we concatenate each letter's letter value, resulting in "021". After converting it, we get 21.
// You are given three strings firstWord, secondWord, and targetWord, each consisting of lowercase English letters 'a' through 'j' inclusive.
// Return true if the summation of the numerical values of firstWord and secondWord equals the numerical value of targetWord, or false otherwise.

class Solution {

    /**
     * @param String $firstWord
     * @param String $secondWord
     * @param String $targetWord
     * @return Boolean
     */
    function isSumEqual($firstWord, $secondWord, $targetWord) {
        $firstSum = '';
        $secondSum = '';
        $targetSum = '';

        for($i = 0; $i < strlen($firstWord); $i++) {
            $firstSum .= ord($firstWord[$i]) - 96 - 1;
        }

        for($i = 0; $i < strlen($secondWord); $i++) {
            $secondSum .= ord($secondWord[$i]) - 96 - 1;
        }
        
        for($i = 0; $i < strlen($targetWord); $i++) {
            $targetSum .= ord($targetWord[$i]) - 96 - 1;
        }
        
        
        return $firstSum + $secondSum == $targetSum ? true : false;
    }
}

$sol = new Solution;
$sol->isSumEqual('j', 'j', 'bi');
?>