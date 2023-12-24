<?php 
 // https://leetcode.com/problems/truncate-sentence

 //A sentence is a list of words that are separated by a single space with no leading or trailing spaces. 
 //Each of the words consists of only uppercase and lowercase English letters (no punctuation).

 class Solution {

    /**
     * @param String $s
     * @param Integer $k
     * @return String
     */
    function truncateSentence($s, $k) {
        $s = explode(' ', $s);
        $result = '';
        
        for ($x = 0; $x < $k; $x++) {
            $result .= $s[$x].' ';
        }

        return trim($result);
    }
}

$sol = new Solution;
$sol->truncateSentence('Hello how are you Contestant', 4);
?>