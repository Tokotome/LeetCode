<?php 
// https://leetcode.com/problems/minimum-string-length-after-removing-substrings/description

// You are given a string s consisting only of uppercase English letters.
// You can apply some operations to this string where, in one operation, you can remove any occurrence of one of the substrings "AB" or "CD" from s.
// Return the minimum possible length of the resulting string that you can obtain.
// Note that the string concatenates after removing the substring and could produce new "AB" or "CD" substrings.

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function minLength($s) {
        while(str_contains($s, 'AB') == true || str_contains($s, 'CD') == true) {
            $s = str_replace('AB', '', $s);
            $s = str_replace('CD', '', $s);
        }

        return strlen($s);
    }
}

$sol = new Solution;
$sol->minLength('ABFCACDB');
?>