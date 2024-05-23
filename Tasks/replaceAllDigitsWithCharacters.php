<?php 
// https://leetcode.com/problems/replace-all-digits-with-characters

// You are given a 0-indexed string s that has lowercase English letters in its even indices and digits in its odd indices.
// There is a function shift(c, x), where c is a character and x is a digit, that returns the xth character after c.
// For example, shift('a', 5) = 'f' and shift('x', 0) = 'x'.
// For every odd index i, you want to replace the digit s[i] with shift(s[i-1], s[i]).
// Return s after replacing all digits. It is guaranteed that shift(s[i-1], s[i]) will never exceed 'z'.

class Solution {

    /**
     * @param String $s
     * @return String
     */
    function replaceDigits($s) {
        if(strlen($s) % 2 != 0) {
            $last = substr($s, -1);
            $s = substr($s, 0, -1);
        }

        $result = '';
        for($x = 0; $x < strlen($s); $x+=2) {
           
           $result .= $s[$x];
           $result .= chr(ord($s[$x]) + $s[$x+1]); 
        }
        
        return $last ? $result.$last : $result; 
    }
}

 $sol = new Solution;
$sol->replaceDigits('a1b2c3d4e1');
?>