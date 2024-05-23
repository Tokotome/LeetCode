<?php 
// https://leetcode.com/problems/first-unique-character-in-a-string/description/

// Given a string s, find the first non-repeating character in it and return its index. If it does not exist, return -1.


class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function firstUniqChar($s) {
        $indexUniqueChar = -1;
        $occurrences = [];
        $index = 0;

        while($s[$index] != '') {
            if($occurrences[$s[$index]] == null) {
                $occurrences[$s[$index]] = ['count' => 1, 'indexes' => [$index]];
            } else {
                $occurrences[$s[$index]]['count']++;
                $occurrences[$s[$index]]['indexes'][] = $index;
            }
            $index++;
        }

        foreach($occurrences as $char) {
           if($char['count'] == 1) {
                return $char['indexes'][0];
           }
        }

        return $indexUniqueChar;
    }
}

$solution = new Solution;
$solution->firstUniqChar('loveleetcode');

?>