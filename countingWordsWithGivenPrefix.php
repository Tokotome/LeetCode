<?php 
// https://leetcode.com/problems/counting-words-with-a-given-prefix/description/

// You are given an array of strings words and a string pref.
// Return the number of strings in words that contain pref as a prefix.
// A prefix of a string s is any leading contiguous substring of s.

// Constraints:

// 1 <= words.length <= 100
// 1 <= words[i].length, pref.length <= 100
// words[i] and pref consist of lowercase English letters.

class Solution {

    /**
     * @param String[] $words
     * @param String $pref
     * @return Integer
     */
    function prefixCount($words, $pref) {
        $totalWords = 0;
        $prefLength = 0;

        while($pref[$prefLength] !== '') {
            $prefLength++;
        }
        
        foreach($words as $word) {
            $wordLength = 0;

            while($pref[$wordLength] !== '') {
                $wordLength++;
            }
            
            if ($wordLength >= $prefLength) {
                $prefFound = true;
                
                for ($i = 0; $i < $prefLength; $i++) {
                    if ($word[$i] !== $pref[$i]) {
                        $prefFound = false;
                        break;
                    }
                }
                
                if ($prefFound) {
                    $totalWords++;
                }
            }
        }
        
        return $totalWords;
    }
}


$solution = new Solution;
$solution->prefixCount(
    ["ua","btyivy","fwofb","zptjjv","jhopih","k","pajqarpfpf","w","cdyd","ljrdthdsoa"]
    , 'owoeg');
?>