<?php 
// https://leetcode.com/problems/check-if-it-is-a-straight-line/description/

// You are given an array coordinates, coordinates[i] = [x, y], where [x, y] represents the coordinate of a point. 
// Check if these points make a straight line in the XY plane.


class Solution {

    /**
     * @param Integer[][] $coordinates
     * @return Boolean
     */
    function checkStraightLine($coordinates) {
        if(count($coordinates)==2) return true;
        $kat1 = $coordinates[1][0]-$coordinates[0][0];
        $kat2 = $coordinates[1][1]-$coordinates[0][1];        
        foreach($coordinates as $i=>$crd){        
            if(count($coordinates) == $i+1) break;    
            $len1 = $coordinates[$i+1][0]-$coordinates[0][0];
            $len2 = $coordinates[$i+1][1]-$coordinates[0][1];
            if($kat1*$len2 != $kat2*$len1)
                return false;
        }        
        return true;     
    }
}

$solution = new Solution;
$solution->checkStraightLine([[1,2],[2,3],[3,4],[4,5],[5,6],[6,7]]);
?>

