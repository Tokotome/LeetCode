<?php 
// https://leetcode.com/problems/check-if-numbers-are-ascending-in-a-sentence/description

// A sentence is a list of tokens separated by a single space with no leading or trailing spaces. 
// Every token is either a positive number consisting of digits 0-9 with no leading zeros, or a word consisting of lowercase English letters.
// For example, "a puppy has 2 eyes 4 legs" is a sentence with seven tokens: "2" and "4" are numbers and the other tokens such as "puppy" are words.
// Given a string s representing a sentence, you need to check if all the numbers in s are strictly increasing from left to right 
// (i.e., other than the last number, each number is strictly smaller than the number on its right in s).
// Return true if so, or false otherwise.

class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function areNumbersAscending($s) {
        $pattern = '/\d+/';
        preg_match_all($pattern, $s, $matches);
        $numbers = $matches[0];
        
        for($i=0; $i < count($numbers)-1; $i++) {
            if($numbers[$i+1] <= $numbers[$i]) {
                return false;
            }
        }

        return true;
    }
}

$sol = new Solution;
$sol->areNumbersAscending('1 box has 3 blue 4 red 6 green and 12 yellow marbles');

?>