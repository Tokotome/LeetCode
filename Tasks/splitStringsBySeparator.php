<?php 
// https://leetcode.com/problems/split-strings-by-separator/description

// Given an array of strings words and a character separator, split each string in words by separator.
// Return an array of strings containing the new strings formed after the splits, excluding empty strings.

class SolutionSplitStringsBySeparator {

    /**
     * @param String[] $words
     * @param String $separator
     * @return String[]
     */
    function splitWordsBySeparator($words, $separator) {
        $result = [];

        if(empty($words)) {
            return $result;
        }
        foreach($words as $word) {
            $arr = explode($separator, $word);
            foreach($arr as $v) {
                if($v) { 
                    array_push($result, $v);
                }
            }
        }
        
        return $result;
    }
}

$sol = new SolutionSplitStringsBySeparator;
$sol->splitWordsBySeparator(["one.two.three","four.five","six"], ".");
?>