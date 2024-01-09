<?php 
// https://leetcode.com/problems/first-letter-to-appear-twice

//Given a string s consisting of lowercase English letters, return the first letter to appear twice.

class Solution {

    /**
     * @param String $s
     * @return String
     */
    function repeatedCharacter($s) {
        $occurences = [];
        
        for($i=0; $i < str_split($s); $i++) {
            if(!array_key_exists($s[$i], $occurences)) {
                $occurences[$s[$i]] = 1;
            } else {
                return $s[$i];
            }
        }

        return false;
    }
}

$sol = new Solution;
$sol->repeatedCharacter('abccbaacz');
?>