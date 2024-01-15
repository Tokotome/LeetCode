<?php 
// https://leetcode.com/problems/count-pairs-of-similar-strings/description

// You are given a 0-indexed string array words.
// Two strings are similar if they consist of the same characters.
// For example, "abca" and "cba" are similar since both consist of characters 'a', 'b', and 'c'.
// However, "abacba" and "bcfd" are not similar since they do not consist of the same characters.
// Return the number of pairs (i, j) such that 0 <= i < j <= word.length - 1 and the two strings words[i] and words[j] are similar.

class Solution {

    /**
     * @param String[] $words
     * @return Integer
     */
    function similarPairs($words) {
        $totalSimilar = 0;
        
        for($i=0; $i < count($words)-1; $i++) {
            for($y=$i + 1; $y < count($words); $y++) {
                $first = array_unique(str_split($words[$i]));
                $next = array_unique(str_split($words[$y]));
                sort($first);
                sort($next);
                if( $first=== $next) {
                    $totalSimilar++;
                }
            } 
        }

        return $totalSimilar;
    }
}

$sol = new Solution;
$sol->similarPairs(["aabb","ab","ba"]);
?>