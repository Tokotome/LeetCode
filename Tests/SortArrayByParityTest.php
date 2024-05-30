<?php

use PHPUnit\Framework\TestCase;
require_once __DIR__ . '\..\Tasks\sortArrayByParity.php';

class SortArrayByParityTest extends TestCase
{
    public function testSortArrayByParity()
    {
        $solution = new SolutionSortArrayByParity();

        $nums = [3,1,4,2];
        
        $expected = [
            [4, 2, 3, 1],
            [2, 4, 3, 1]
        ];
        
        $result = $solution->sortArrayByParity($nums);

        $this->assertTrue(in_array($result, $expected, true), "The result does not match any of the possible expected outputs.");
    }

    public function testSortArrayByParityOnlyEven()
    {
        $solution = new SolutionSortArrayByParity();

        $nums = [4,2];
        
        $expected = [4,2];
        
        $result = $solution->sortArrayByParity($nums);

        $this->assertEquals($expected, $result);
    }

    public function testSortArrayByParityOnlyOdd()
    {
        $solution = new SolutionSortArrayByParity();

        $nums = [1,3];
        
        $expected = [1,3];
        
        $result = $solution->sortArrayByParity($nums);

        $this->assertEquals($expected, $result);
    }

    public function testSortArrayByParityEmpty()
    {
        $solution = new SolutionSortArrayByParity();

        $nums = [];
        
        $expected = [];
        
        $result = $solution->sortArrayByParity($nums);

        $this->assertEquals($expected, $result);
    }
}

?>