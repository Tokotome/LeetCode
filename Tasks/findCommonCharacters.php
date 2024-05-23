<?php 
// https://leetcode.com/problems/find-common-characters/description

// Given a string array words, return an array of all characters that show up in all strings within the words 
// (including duplicates). You may return the answer in any order.

class Solution {

    /**
     * @param String[] $words
     * @return String[]
     */
    function commonChars($words) {
        $firstWord = str_split($words[0]);
        $repeatedChars = [];

        for($i=0; $i < strlen($words[0]); $i++) {
            $exist = true;

            for($y=1; $y < count($words); $y++) {
                $pos = stripos($words[$y], $firstWord[$i]);

                if($pos == "") {
                    $exist = false;
                    break;
                }

                $words[$y][$pos] = '-';
            }

            if($exist) {
                $repeatedChars[] = $firstWord[$i];
            }
        }

        return $repeatedChars;
    }
}


$sol = new Solution;
$sol->commonChars(["bella","label","roller"]);

?>