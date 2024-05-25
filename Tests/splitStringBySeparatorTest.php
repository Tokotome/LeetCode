<?php

use PHPUnit\Framework\TestCase;
require_once __DIR__ . '\..\Tasks\splitStringsBySeparator.php';

class splitStringBySeparatorTest extends TestCase
{
    public function testSplitWordsBySeparator()
    {
        $solution = new SolutionSplitStringsBySeparator();

        $words = ['$easy$', '$problem$'];
        $separator = '$';
        $expected = ['easy', 'problem'];
        
        $result = $solution->splitWordsBySeparator($words, $separator);

        $this->assertEquals($expected, $result);
    }

    public function testSplitWordsByDifferentSeparator()
    {
        $solution = new SolutionSplitStringsBySeparator();

        $words = ['apple,orange', 'banana,mango'];
        $separator = ',';
        $expected = ['apple', 'orange', 'banana', 'mango'];
        
        $result = $solution->splitWordsBySeparator($words, $separator);

        $this->assertEquals($expected, $result);
    }

    public function testSplitEmptyWordsBySeparator()
    {
        $solution = new SolutionSplitStringsBySeparator();

        $words = [];
        $separator = ',';
        $expected = [];
        
        $result = $solution->splitWordsBySeparator($words, $separator);

        $this->assertEquals($expected, $result);
    }

    // You can add more tests to cover other cases
}
?>