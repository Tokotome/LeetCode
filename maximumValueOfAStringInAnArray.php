<?php 
// https://leetcode.com/problems/maximum-value-of-a-string-in-an-array/description

class Solution {

    /**
    * @param String[] $strs
    * @return Integer
    */
    function maximumValue($strs) {
        $largest = 0;

    foreach($strs as $str) {
        if(is_numeric($str)){
            if($str > $largest) {
                $largest = $str;
            }
        } else {
            if(strlen($str) > $largest ) {
                $largest = strlen($str);
            } else {
                continue;
            }
        } 
    }

    return (int)$largest;
    }
}

$sol = new Solution;
$sol->maximumValue(["1","01","001","0001"]);
?>