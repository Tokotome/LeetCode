<?php 
// https://leetcode.com/problems/reverse-words-in-a-string-iii/description

//Given a string s, reverse the order of characters in each word within a sentence while still preserving whitespace and initial word order.

class Solution {

    /**
     * @param String $s
     * @return String
     */
    function reverseWords($s) {
        $strLength = 0;
        
        while ($s[$strLength] !== '') {
            $strLength++;
        }
        
        $words = [];
        $word = '';
        for ($i = 0; $i < $strLength; $i++) {
            if ($s[$i] !== ' ') {
                $word .= $s[$i];
            } else {
                $words[] = $word;
                $word = '';
            }
        }
        
        $words[] = $word;
        $result = '';

        foreach($words as $word) {
            $reversed = '';
            $length = 0;
        
            while ($word[$length] !== '') {
                $length++;
            }
            
            for ($i = 0; $i < $length; $i++) {  
                $reversed = $word[$i].$reversed; 
            }
            
            $result.= $reversed.' ';
            
        }
        
        $trimmed = '';

        $length = 0;
        
        while ($result[$length] !== '') {
            $length++;
        }

        for ($i = 0; $i < $length-1; $i++) {  
            $trimmed .= $result[$i]; 
        }

        return $trimmed;
    }
}

$solution = new Solution;
$solution->reverseWords("Let's take LeetCode contest");

?>