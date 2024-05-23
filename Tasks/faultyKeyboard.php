<?php 
// https://leetcode.com/problems/faulty-keyboard

// Your laptop keyboard is faulty, and whenever you type a character 'i' on it, it reverses the string that you have written. 
// Typing other characters works as expected.
// You are given a 0-indexed string s, and you type each character of s using your faulty keyboard.

class Solution {

    /**
     * @param String $s
     * @return String
     */
    function finalString($s) {
        if (strpos($s, 'i') === false) {
            return $s;
        }

        $output = '';
        
        foreach(str_split($s) as $char) {
            if($char != 'i') {
                $output.= $char; 
            } else {
                $output = strrev($output);
            }
        }
        return $output;
    }
}

$sol = new Solution;
$sol->finalString('poiinter');
?>