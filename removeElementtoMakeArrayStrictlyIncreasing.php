<?php
// https://leetcode.com/problems/find-words-containing-character

//You are given a 0-indexed array of strings words and a character x.
//Return an array of indices representing the words that contain the character x.
//Note that the returned array may be in any order.

function findWordsContaining($words, $x) {
    $result = [];

    foreach ($words as $k => $word) {
        if(str_contains($word, $x) != 0) {
            $result[] = $k;
        }
    }
    return $result;
}
?>