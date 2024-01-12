<?php 
    // https://leetcode.com/problems/greatest-english-letter-in-upper-and-lower-case/description/

    class Solution {

        /**
         * @param String $s
         * @return String
         */
        function greatestLetter($s) {
            
            if(empty($s)) {
                return '';
            }
            $result = [];
            $lower = '';
            $upper = '';

            for($i = 0; $i < strlen($s); $i++) {
                if(ctype_upper($s[$i])) {
                    $upper.= $s[$i];
                } else {
                    $lower.= $s[$i];
                }
            }
            
            for($i=0; $i<strlen($upper); $i++) {
                if(strpos($lower, strtolower($upper[$i])) !== false) {
                    $result []= $upper[$i];
                }
            }

            rsort($result);
            return empty($result) ?  "" : $result[0];
        }
    }

    $sol = new Solution;
    $sol->greatestLetter(('lEeTcOdE'));
?>