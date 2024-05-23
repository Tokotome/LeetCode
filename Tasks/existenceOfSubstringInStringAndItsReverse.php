<?php 
// https://leetcode.com/problems/existence-of-a-substring-in-a-string-and-its-reverse/description

// Given a string s, find any substring
// of length 2 which is also present in the reverse of s.
// Return true if such a substring exists, and false otherwise.

class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isSubstringPresent($s) {
        $strLength = 0;
        while ($s[$strLength] !== '') {
            $strLength++;
        }

        $substrings = [];

        for ($i = 0; $i < $strLength; $i++) {
            $substrings[] =  $s[$i].$s[$i+1];
        }

        foreach($substrings as $substring) {
            for ($i = $strLength-1; $i > 0; $i--) {
                $reversedSubstring = $s[$i].$s[$i-1];
                
                if($reversedSubstring == $substring) {
                    return true;  
                }
            }
        }
        
        return false;
    }
}

$solution = new Solution;
$solution->isSubstringPresent('leetcode');
?>