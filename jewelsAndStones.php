<?php 

//https://leetcode.com/problems/jewels-and-stones/

//You're given strings jewels representing the types of stones that are jewels, 
//and stones representing the stones you have. Each character in stones is a type of stone you have. 
//You want to know how many of the stones you have are also jewels.
//Letters are case sensitive, so "a" is considered a different type of stone from "A".

function numJewelsInStones($jewels, $stones) {
    $total = 0;
    foreach (str_split($jewels) as $jewel) {
        $total+= substr_count($stones,$jewel);
    }
    return $total;
}
?>