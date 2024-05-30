<?php 

// https://leetcode.com/problems/sorting-the-sentence

// A sentence is a list of words that are separated by a single space with no leading or trailing spaces. 
// Each word consists of lowercase and uppercase English letters.
// A sentence can be shuffled by appending the 1-indexed word position to each word then rearranging the words in the sentence.
// For example, the sentence "This is a sentence" can be shuffled as "sentence4 a3 is2 This1" or "is2 sentence4 This1 a3".
// Given a shuffled sentence s containing no more than 9 words, reconstruct and return the original sentence.

class Solution {

    /**
     * @param String $s
     * @return String
     */
    function sortSentence($s) {
        if(count(explode(' ', $s)) > 9) {
            Throw new Exception('The sentence should contain maximum 9 words!');
        }
        
        $result = []; 
        $arrSentence = explode(' ', $s);
        
        foreach($arrSentence as $k => $value) {
            $index = filter_var($value, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
            $value = str_replace($index, '', $value);
            $result[$index] = $value;
        }

        ksort($result);

        return implode(' ',$result);
    }
}

$sol = new Solution;
$sol->sortSentence('2is sentence4 This1 a3');

?>