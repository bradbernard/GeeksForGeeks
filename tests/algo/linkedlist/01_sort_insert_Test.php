<?php

require __DIR__ . '/../../../src/algo/linkedlist/01_sort_insert.php';

class SortInsertLLTest extends PHPUnit_Framework_TestCase 
{
    public function testSortInsert() {

        $ll = new LinkedList();
        $ll->sortedInsert(new Node(5));
        $ll->sortedInsert(new Node(2));
        $ll->sortedInsert(new Node(3));
        $ll->sortedInsert(new Node(1));
        $ll->sortedInsert(new Node(7));
        $ll->sortedInsert(new Node(4));
        
        $ll->out();

        $this->expectOutputString("1 2 3 4 5 7 \n");
    }
}
