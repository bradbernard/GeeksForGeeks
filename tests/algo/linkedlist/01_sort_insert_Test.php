<?php

require __DIR__ . '/../../../src/algo/linkedlist/01_sort_insert.php';

class SortInsertLLTest extends PHPUnit_Framework_TestCase 
{
    public function testSortInsert() {

        $ll = new SISinglyLinkedList();
        $ll->sortedInsert(new SINode(5));
        $ll->sortedInsert(new SINode(2));
        $ll->sortedInsert(new SINode(3));
        $ll->sortedInsert(new SINode(1));
        $ll->sortedInsert(new SINode(7));
        $ll->sortedInsert(new SINode(4));
        
        $ll->out();

        $this->expectOutputString("1 2 3 4 5 7 \n");
    }
}
