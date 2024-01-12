<?php 
// https://leetcode.com/problems/largest-3-same-digit-number-in-string/description

// You are given a string num representing a large integer. An integer is good if it meets the following conditions:
// It is a substring of num with length 3.
// It consists of only one unique digit.
// Return the maximum good integer as a string or an empty string "" if no such integer exists.
// Note:
// A substring is a contiguous sequence of characters within a string.
// There may be leading zeroes in num or a good integer.

class Solution {

    /**
     * @param String $num
     * @return String
     */
    function largestGoodInteger($num) {
        $threeDigits = [];

        for($i=0; $i<strlen($num)-2; $i++) {
            if($num[$i] == $num[$i+1] && $num[$i+1] == $num[$i+2]) {
                $threeDigits[] = $num[$i]. $num[$i+1]. $num[$i+2];
            }
        }
        
        if(empty($threeDigits)) {
            return "";
        }

        rsort($threeDigits);
        
        return $threeDigits[0];
    }
}

$sol = new Solution;
$sol->largestGoodInteger('6777133339');
?>