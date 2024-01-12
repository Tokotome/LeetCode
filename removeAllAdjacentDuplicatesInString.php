<?php 
// https://leetcode.com/problems/remove-all-adjacent-duplicates-in-string/description

// You are given a string s consisting of lowercase English letters. 
// A duplicate removal consists of choosing two adjacent and equal letters and removing them.
// We repeatedly make duplicate removals on s until we no longer can.
// Return the final string after all such duplicate removals have been made. 
// It can be proven that the answer is unique.

class Solution {

    /**
     * @param String $s
     * @return String
     */
    function removeDuplicates($s) {
        $result = [];
        
        for ($i=0; $i<strlen($s); $i++) {
            $end = end($result);
            $letter = $s[$i];

            if (end($result) == $s[$i])
                array_pop($result);
            else
                array_push($result, $s[$i]);
        }
        
        return implode($result);
    }
}

$sol = new Solution;
$sol->removeDuplicates('abbaca');
?>