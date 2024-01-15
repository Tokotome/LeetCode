<?php 
// https://leetcode.com/problems/largest-substring-between-two-equal-characters/description

// Given a string s, return the length of the longest substring between two equal characters, excluding the two characters. 
// If there is no such substring return -1.
// A substring is a contiguous sequence of characters within a string.

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function maxLengthBetweenEqualCharacters($s) {
        $charsCount = array_count_values(str_split($s)); 
        $repeatable = array_filter($charsCount, function($v) { return $v >1;});
       
        $largest = -1;

        foreach($repeatable as $letter => $count) {
            preg_match_all('/'.$letter.'/', $s, $matches, PREG_OFFSET_CAPTURE);
            
            if( max($matches[0])[1] - min($matches[0])[1] > $largest) {
                $largest = max($matches[0])[1] - min($matches[0])[1];
            }

        }

        if($largest == 1) {
            $largest = 0;
        } 

        if($largest >= 2) {
            $largest--;
        }

        return $largest;
          
    }
}

$sol = new Solution;
//$sol->maxLengthBetweenEqualCharacters('abcadertydqa');
$sol->maxLengthBetweenEqualCharacters('aa');
?>