<?php 
// https://leetcode.com/problems/to-lower-case/description

//Given a string s, return the string after replacing every uppercase letter with the same lowercase letter.

class Solution {

    /**
     * @param String $s
     * @return String
     */
    function toLowerCase($s) {
        $strLength = 0;
        
        while(substr($s, $strLength, $strLength+1) != '') {
            $strLength++;
        }
        
        for($i=0; $i < $strLength; $i++) {
            if($s[$i] >= 'A' && $s[$i] <= 'Z') {
                $s[$i] = chr(ord($s[$i]) + 32);
            } 
        }

        return $s;
    }
}

$solution = new Solution;
$solution->toLowerCase('Hello');

?>