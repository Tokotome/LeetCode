<?php 
// https://leetcode.com/problems/consecutive-characters/description

// The power of the string is the maximum length of a non-empty substring that contains only one unique character.
// Given a string s, return the power of s.

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function maxPower($s) {
        $strength = 0;
        $largestStrength=0;

        $index = 0;

        while($s[$index] != '') {
            $a = $s[$index];
            $b = $s[$index+1]; 
            if($s[$index] == $s[$index+1]) {
                $strength++;
                if($strength > $largestStrength) {
                    $largestStrength = $strength;
                }
            } else {
                $strength = 0;
            }
            $index++;
        }

        return $largestStrength+1;
    }
}

$solution = new Solution;
$solution->maxPower('bacacccbba');

?>