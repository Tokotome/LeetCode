<?php 
// https://leetcode.com/problems/remove-one-element-to-make-the-array-strictly-increasing

//Given a 0-indexed integer array nums, return true if it can be made strictly increasing after removing exactly one element, 
//or false otherwise. If the array is already strictly increasing, return true.

function canBeIncreasing($nums) {
    if(count($nums)==2){
     return true;
     } else{
         for($i=0;$i<count($nums);$i++){
             $arrays = $array = $nums;
             array_splice($array,$i,1);
             array_splice($arrays,$i,1);
             sort($array);
             if(($array==$arrays)&&($array==array_unique($array))){
                 return true;
             }
         }
         return false;
     }
 }

?>