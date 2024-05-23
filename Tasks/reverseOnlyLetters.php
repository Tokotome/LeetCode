<?php 
// https://leetcode.com/problems/reverse-only-letters/description

// Given a string s, reverse the string according to the following rules:
// All the characters that are not English letters remain in the same position.
// All the English letters (lowercase or uppercase) should be reversed.
// Return s after reversing it.

class Solution {

    /**
     * @param String $s
     * @return String
     */
    function reverseOnlyLetters($s) {
        $reversed = [];
        $nonLetters = [];
        
        for($i=0; $i< strlen($s); $i++) {
            if(ctype_alpha($s[$i])) {
                array_unshift($reversed, $s[$i]);
            } else {
                $nonLetters[$i] = $s[$i];
            }
        }
        
        foreach($nonLetters as $k=> $char) {
            array_splice($reversed, $k, 0, $char);
        }
        
        return implode($reversed);
    }
}

$sol = new Solution;
$sol->reverseOnlyLetters('a-bC-dEf-ghIj');
?>