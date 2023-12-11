<?php 
//Given an integer array sorted in non-decreasing order, there is exactly one integer 
//in the array that occurs more than 25% of the time, return that integer.

    function findSpecialInteger($arr) {
        if (count($arr) == 1) {
                return $arr[0];
        }

        if (count($arr) % 4 == 0) {
                $quater = count($arr) / 4 + 1;
        } else {
                $quater = ceil(count($arr) / 4);
        }

        $valuesCount = [];

        foreach ($arr as $key => $value) {
                if (!array_key_exists($value, $valuesCount)) {
                $valuesCount[$value] = 1;
                } else {
                $valuesCount[$value]++;
                if ($valuesCount[$value] >= $quater) {
                        return $value;
                }
                }
        }
    }

    //alternative
    function findSpecialIntegerAlternative($arr) {
        $counts = array_count_values($arr);
        arsort($counts);
        $keys = array_keys($counts);
        return $keys[0];
    }
?>

