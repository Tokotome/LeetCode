<?php 
// https://leetcode.com/problems/count-items-matching-a-rule

// You are given an array items, where each items[i] = [typei, colori, namei] describes the type, color, and name of the ith item. 
// You are also given a rule represented by two strings, ruleKey and ruleValue.
// The ith item is said to match the rule if one of the following is true:

// ruleKey == "type" and ruleValue == typei.
// ruleKey == "color" and ruleValue == colori.
// ruleKey == "name" and ruleValue == namei.
// Return the number of items that match the given rule.


class Solution {

    /**
     * @param String[][] $items
     * @param String $ruleKey
     * @param String $ruleValue
     * @return Integer
     */
    function countMatches($items, $ruleKey, $ruleValue) {
        
        if($ruleKey == 'type') {
            $index = 0;
        } else if ($ruleKey == 'color') {
            $index = 1;
        } else {
            $index = 2;
        }

        $totalItems = 0;

        foreach($items as $item) {
            if($item[$index] == $ruleValue) {
                $totalItems++;
            }
        }

        return $totalItems;
    }
}

$sol = new Solution;
$sol->countMatches([["phone","blue","pixel"],["computer","silver","phone"],["phone","gold","iphone"]], 'type', 'phone');

?>