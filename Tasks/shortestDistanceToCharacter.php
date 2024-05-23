<?php 
// https://leetcode.com/problems/shortest-distance-to-a-character/description

// Given a string s and a character c that occurs in s, return an array of integers answer 
// where answer.length == s.length and answer[i] is the distance from index i to the closest occurrence of character c in s.
// The distance between two indices i and j is abs(i - j), where abs is the absolute value function.

class Solution {

    /**
     * @param String $s
     * @param String $c
     * @return Integer[]
     */
    function shortestToChar($s, $c) {
        $s_parts = str_split($s);
        $shortestIndexes = []; $c_locations =
          array_filter($s_parts, function ($element) use ($c) { return isset($element) && $element == $c;
          });
        

        foreach ($s_parts as $k => $char) { if ($char === $c) { $shortestIndexes[$k] = 0; continue; } $shortest_distance = 0;
            foreach ($c_locations as $index => $val) { $distance  = abs($k - $index);
                if ($shortest_distance === 0 || $distance < $shortest_distance) { $shortest_distance = $distance; } } $shortestIndexes[$k] = $shortest_distance;
        }
        return $shortestIndexes;
    }
}

$sol = new Solution;
$sol->shortestToChar('loveleetcode', 'e');
?>