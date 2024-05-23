<?php 
// https://leetcode.com/problems/minimum-time-to-type-word-using-special-typewriter/

// There is a special typewriter with lowercase English letters 'a' to 'z' arranged in a circle with a pointer. 
// A character can only be typed if the pointer is pointing to that character. 
// The pointer is initially pointing to the character 'a'.
// Each second, you may perform one of the following operations:
// Move the pointer one character counterclockwise or clockwise.
// Type the character the pointer is currently on.
// Given a string word, return the minimum number of seconds to type out the characters in word.

class Solution {

    /**
     * @param String $word
     * @return Integer
     */
    function minTimeToType($word) {
        $pointer = 'a';
        $result = 0;    

        for ($i = 0; $i < strlen($word); $i++) {
            if ($pointer == $word[$i]) {
                    ++$result;
                continue;
            }
                
            $pNum = ord($pointer) - 96;
            $lNum = ord($word[$i]) - 96;
                
            $minDiff = min(
                (max($lNum, $pNum) - min($lNum, $pNum)), 
                (26 - max($lNum, $pNum)) + min($lNum, $pNum)
            );
                
                $result += $minDiff + 1;
                $pointer = $word[$i];
        }
        
       return $result; 
    }
}

$sol = new Solution;
$sol->minTimeToType('zjpc');

?>