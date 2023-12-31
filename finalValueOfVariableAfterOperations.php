<?php 
// https://leetcode.com/problems/final-value-of-variable-after-performing-operations
//There is a programming language with only four operations and one variable X:
//++X and X++ increments the value of the variable X by 1.
//--X and X-- decrements the value of the variable X by 1.
//Initially, the value of X is 0.
//Given an array of strings operations containing a list of operations, 
//return the final value of X after performing all the operations.

function finalValueAfterOperations($operations) {
     $start = 0;
     foreach ($operations as $operation) { 
        if (str_contains($operation, '-')) {
            $start --;
        } else {
            $start ++;
        }
     } 

     return $start;
}
?>