<?php 
// https://leetcode.com/problems/keyboard-row/description

//Given an array of strings words, return the words that can be typed using letters of the alphabet on only one row of American keyboard.
// the first row consists of the characters "qwertyuiop",
// the second row consists of the characters "asdfghjkl", and
// the third row consists of the characters "zxcvbnm".


class Solution {

    /**
     * @param String[] $words
     * @return String[]
     */
    function findWords($words) {
        $firstRow = "qwertyuiop";
        $secondRow = "asdfghjkl";
        $thirdRow = "zxcvbnm";
        $result = [];

        foreach ($words as $word) {
            $firstR = '';
            $secondR = '';
            $thirdR = '';

            for ($i = 0; $i < strlen($word); $i++) {
                $lowerCaseWord = strtolower($word);

                if (str_contains($firstRow, $lowerCaseWord[$i])) {
                    $firstR .= $word[$i];
                }
                if (str_contains($secondRow, $lowerCaseWord[$i])) {
                    $secondR .= $word[$i];
                }
                if (str_contains($thirdRow, $lowerCaseWord[$i])) {
                    $thirdR .= $word[$i];
                }
            }
            
            if (max($firstR, $secondR, $thirdR) == $word) {
                $result[] = $word;
            }
        }

        return $result;      
    }
}

$sol = new Solution;
$sol->findWords(["Hello", "Alaska", "Dad","Peace"]);
?>