<?php

require __DIR__ . '/../../../src/algo/linkedlist/03_str_cmp.php';

class CompareSLLTest extends PHPUnit_Framework_TestCase 
{
    public function testSortInsert() {

        $sll = new CMPSinglyLinkedList();

        $left = new CMPNode('g');
        $left->next = new CMPNode('e');
        $left->next->next = new CMPNode('e');
        $left->next->next->next = new CMPNode('k');
        $left->next->next->next->next = new CMPNode('s');
        $left->next->next->next->next->next = new CMPNode('a');

        $right = new CMPNode('g');
        $right->next = new CMPNode('e');
        $right->next->next = new CMPNode('e');
        $right->next->next->next = new CMPNode('k');
        $right->next->next->next->next = new CMPNode('s');
        $right->next->next->next->next->next = new CMPNode('b');
        
        $this->assertTrue($sll->compare($left, $right) == -1);
    }
}
