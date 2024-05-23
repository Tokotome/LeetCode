<?php 
// https://leetcode.com/problems/split-a-string-in-balanced-strings

// Balanced strings are those that have an equal quantity of 'L' and 'R' characters.
// Given a balanced string s, split it into some number of substrings such that:
// Each substring is balanced.
// Return the maximum number of balanced strings you can obtain.

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function balancedStringSplit($s) {
        $strLength = 0;
        
        while(substr($s, $strLength, $strLength+1) != '')
        {
            $strLength++;
        }
        
        $totalEqualStrings = 0;
            $totalR = 0;
            $totalL = 0;
        
        for($i=0; $i < $strLength; $i++) {
            
            if($s[$i] == 'R' || $s[$i] == 'r') {
                $totalR ++;
            }

            if($s[$i] == 'L' || $s[$i] == 'l') {
                $totalL++;
            }

            if($totalL == $totalR) {
                $totalEqualStrings++;

                $totalR = 0;
                $totalL = 0;
            }
        }

        return $totalEqualStrings;
    }
}

$solution = new Solution;
$solution->balancedStringSplit('RLRRLLRLRL');

?>