<?php 
//https://leetcode.com/problems/shuffle-string

// You are given a string s and an integer array indices of the same length. 
// The string s will be shuffled such that the character at the ith position 
// moves to indices[i] in the shuffled string.

class Solution {

    /**
     * @param String $s
     * @param Integer[] $indices
     * @return String
     */
    function restoreString($s, $indices) {
        if(strlen($s) !== count($indices)) {
            Throw new Exception('The length of the string is not the same as the count of the elements in the indices array!');
        }
        
        $n = count($indices);
        $result = $indices;
        for($i = 0; $i < $n; $i++){
            $result[$indices[$i]] = $s[$i];
        }
        return implode('', $result);
    }   
}

$sol = new Solution;
$sol->restoreString('codeleet', [4,5,6,7,0,2,1,3]);



?>