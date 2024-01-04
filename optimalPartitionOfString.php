<?php 

// https://leetcode.com/problems/optimal-partition-of-string

// Given a string s, partition the string into one or more substrings such that the characters in each substring are unique. 
// That is, no letter appears in a single substring more than once.
// Return the minimum number of substrings in such a partition.
// Note that each character should belong to exactly one substring in a partition.

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function partitionString($s) {
        $unique = [];
        $total = 0;

        foreach(str_split($s) as $char) {
            if(in_array($char, $unique) == false) {
                $unique[] = $char;
            } else {
                $unique = [];
                $unique[] = $char;
                $total++;
            }
        }
        echo $total+1;
    }
}

$sol = new Solution;
$sol->partitionString('abacab');
?>