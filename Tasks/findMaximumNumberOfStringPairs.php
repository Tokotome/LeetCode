<?php 
// https://leetcode.com/problems/find-maximum-number-of-string-pairs/description

// You are given a 0-indexed array words consisting of distinct strings.
// The string words[i] can be paired with the string words[j] if:
// The string words[i] is equal to the reversed string of words[j].
// 0 <= i < j < words.length.
// Return the maximum number of pairs that can be formed from the array words.
// Note that each string can belong in at most one pair.

class Solution {

    /**
     * @param String[] $words
     * @return Integer
     */
    function maximumNumberOfStringPairs($words) {
        $count = count($words);
        $totalPairs = 0;
        for($i=0; $i<$count; $i++) {
            for($j=$i+1; $j<$count; $j++) {
                $reversed = '';
                $word = $words[$j];
                for ($k = strlen($word) - 1; $k >= 0; $k--) {
                    $reversed .= $word[$k];
                }
                
                if($words[$i] == $reversed) {
                    $totalPairs++;
                }
            }
        }
        return $totalPairs;
    }
}

$solution = new Solution;
$solution->maximumNumberOfStringPairs(["cd","ac","dc","ca","zz"]);
?>