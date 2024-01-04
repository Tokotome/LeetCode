<?php 

// https://leetcode.com/problems/remove-trailing-zeros-from-a-string

//Given a positive integer num represented as a string, return the integer num without trailing zeros as a string.

class Solution {

    /**
     * @param String $num
     * @return String
     */
    function removeTrailingZeros($num) {
        
        if(strpos($num, '0') == false) {
            return $num; 
        }
        
        $num = str_split(strrev($num));
        
        for ($i=0; $i<count($num); $i++) {
            if ($num[$i] == '0') {
                $num[$i] = '';
            } else {
                break;
            }
          }
        return strrev(implode($num));
    }
}

$sol = new Solution;
$sol->removeTrailingZeros('51230100');
?>