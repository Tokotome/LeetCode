<?php   

//Given the array of integers nums, you will choose two different indices i and j of that array. 
//Return the maximum value of (nums[i]-1)*(nums[j]-1).

function maxProduct($nums) {
    sort($nums);
    return ($nums[count($nums)-1]-1 ) * ($nums[count($nums)-2]-1);
}
?>