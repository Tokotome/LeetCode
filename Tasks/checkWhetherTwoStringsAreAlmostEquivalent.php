<?php 
// https://leetcode.com/problems/check-whether-two-strings-are-almost-equivalent/description/

// Two strings word1 and word2 are considered almost equivalent if the differences between the frequencies of each letter from 'a' to 'z' 
// between word1 and word2 is at most 3.
// Given two strings word1 and word2, each of length n, return true if word1 and word2 are almost equivalent, or false otherwise.
// The frequency of a letter x is the number of times it occurs in the string.

class Solution {

    /**
     * @param String $word1
     * @param String $word2
     * @return Boolean
     */
    function checkAlmostEquivalent($word1, $word2) {
        //find how many times does each char occur in the first array
        $index =0;
        $frequenciesFirst = [];
        while ($word1[$index] !== '') {
            if($frequenciesFirst[$word1[$index]] == null) {
                $frequenciesFirst[$word1[$index]] = 1;
            } else {
                $frequenciesFirst[$word1[$index]]++;
            }
            $index++;
        }

        //find how many times does each char occur in the second array
        $index =0;
        $frequenciesSecond = [];
        while ($word2[$index] !== '') {
            if($frequenciesSecond[$word2[$index]] == null) {
                $frequenciesSecond[$word2[$index]] = 1;
            } else {
                $frequenciesSecond[$word2[$index]]++;
            }
            $index++;
        }

        //loop both first nested in second and vice versa to catch characters present in one array but not in the other 
       foreach($frequenciesSecond as $k => $v) {
            if($frequenciesFirst[$k] && $frequenciesSecond[$k]) {
                if($frequenciesFirst[$k] - $frequenciesSecond[$k] > 3 || $frequenciesSecond[$k] - $frequenciesFirst[$k] > 3 ) {
                    return false;
                }
            }

            if($frequenciesFirst[$k] && $frequenciesSecond[$k] == null) {
                if($frequenciesFirst[$k] - 0 > 3) {
                    return false;
                }
            }

            if($frequenciesFirst[$k] ==null && $frequenciesSecond[$k]) {
                if($frequenciesSecond[$k] - 0 > 3) {
                    return false;
                }
            }
        }

        foreach($frequenciesFirst as $k => $v) {
            if($frequenciesFirst[$k] && $frequenciesSecond[$k]) {
                if($frequenciesFirst[$k] - $frequenciesSecond[$k] > 3 || $frequenciesSecond[$k] - $frequenciesFirst[$k] > 3 ) {
                    return false;
                }
            }

            if($frequenciesFirst[$k] && $frequenciesSecond[$k] == null) {
                if($frequenciesFirst[$k] - 0 > 3) {
                    return false;
                }
            }

            if($frequenciesFirst[$k] ==null && $frequenciesSecond[$k]) {
                if($frequenciesSecond[$k] - 0 > 3) {
                    return false;
                }
            }
        }
        
        return true;
    }
}

$solution = new Solution;
$solution->checkAlmostEquivalent('zzzza', 'aaaab');

?>