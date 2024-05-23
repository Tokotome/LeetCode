<?php 
// https://leetcode.com/problems/check-if-all-as-appears-before-all-bs/description

// Given a string s consisting of only the characters 'a' and 'b', return true if every 'a' appears before every 'b' in the string.
// Otherwise, return false.

class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function checkString($s) {
        $arr = array_unique(str_split($s));
        
        if(count($arr) == 1 && $arr[0] == 'a') {
            return true;
        }

        $totalB = 0;
        for($i = 0; $i < strlen($s); $i++) {
            if($totalB > 0 && strtolower($s[$i]) == 'a') {
                return false;
            }

            if(strtolower($s[$i]) == 'b') {
                $totalB++;
            }            
        }

        return true;
    }
}

$sol = new Solution;
$sol->checkString('abbab');
?>