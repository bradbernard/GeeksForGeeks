<?php

require __DIR__ . '/../../../src/algo/linkedlist/02_delete.php';

class DeleteSLLTest extends PHPUnit_Framework_TestCase 
{
    public function testSortInsert() {

        $sll = new DELSinglyLinkedList();

        $list = new DELNode(12);
        $list->next = new DELNode(15);
        $list->next->next = new DELNode(10);
        $list->next->next->next = new DELNode(11);
        $list->next->next->next->next = new DELNode(5);
        $list->next->next->next->next->next = new DELNode(6);
        $list->next->next->next->next->next->next = new DELNode(2);
        $list->next->next->next->next->next->next->next = new DELNode(3);
        
        $sll->deleteNode($list, $list);
        $sll->out($list);

        $this->expectOutputString("15 10 11 5 6 2 3 \n");
    }
}
