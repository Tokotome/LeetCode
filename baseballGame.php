<?php 
// https://leetcode.com/problems/baseball-game/description/

// You are keeping the scores for a baseball game with strange rules. At the beginning of the game, you start with an empty record.
// You are given a list of strings operations, where operations[i] is the ith operation you must apply to the record and is one of the following:
// An integer x.
// Record a new score of x.
// '+'.
// Record a new score that is the sum of the previous two scores.
// 'D'.
// Record a new score that is the double of the previous score.
// 'C'.
// Invalidate the previous score, removing it from the record.

// Return the sum of all the scores on the record after applying all the operations.
// The test cases are generated such that the answer and all intermediate calculations fit in a 32-bit integer and that all operations are valid.

class Solution {

    /**
     * @param String[] $operations
     * @return Integer
     */
    function calPoints($operations) {
        $record = [];
        foreach($operations as $op){
            if($op=='C') {
                //array_pop($record);
                $lastIndex = count($record) - 1;
                $newArray = [];
                for ($i = 0; $i < $lastIndex; $i++) {
                    $newArray[] = $record[$i];
                }
                $record = $newArray;                

            } else if($op=='D') {
                $record[] = end($record)*2;
            } else if($op=="+") {
                $record[] = end($record)+$record[count($record)-2];
            } else {
                $record[] = $op;
            }
        }
        
        return array_sum($record);
    }
}

$solution = new Solution;
$solution->calPoints(["5","2","C","D","+"]);
?>

