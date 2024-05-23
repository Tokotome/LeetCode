<?php 
// https://leetcode.com/problems/sort-characters-by-frequency/description

//Given a string s, sort it in decreasing order based on the frequency of the characters. 
//The frequency of a character is the number of times it appears in the string.
//Return the sorted string. If there are multiple answers, return any of them.

class Solution {

    /**
     * @param String $s
     * @return String
     */
    function frequencySort($s) {
        $valuesCount = (array_count_values(str_split($s)));
        
        uksort(
            $valuesCount,
            fn($a, $b) =>
            $valuesCount[$b] <=> $valuesCount[$a]                                 
                ?: $a <=> $b 
        );

        $result = '';

        foreach($valuesCount as $k => $v) {
            $result .= str_repeat($k, $v);
        }
        return $result;
    }
}

$sol = new Solution;
$sol->frequencySort('tree');
?>