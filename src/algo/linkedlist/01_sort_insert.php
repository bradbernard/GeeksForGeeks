<?php

// http://www.geeksforgeeks.org/given-a-linked-list-which-is-sorted-how-will-you-insert-in-sorted-way/
// Time Complexity: O(n)

class SINode {

    public $data;
    public $next;

    public function __construct($data) {
        $this->data = $data;
        $this->next = NULL;
    }
}

class SISinglyLinkedList {

    public $head;

    public function __construct() {
        $this->head = NULL;
    }

    public function sortedInsert($node) {
        if($this->head == NULL) {
            $this->head = $node;
        } else if($this->head->data > $node->data) {
            $node->next = $this->head;
            $this->head = $node;
        } else {
            $curr = $this->head;
            while($curr->next != NULL && $curr->next->data < $node->data) {
                $curr = $curr->next;
            }

            $node->next = $curr->next;
            $curr->next = $node;
        }
    }

    public function out() {
        $run = $this->head;
        while($run != NULL) {
            echo $run->data . ' ';
            $run = $run->next;
        }
        echo "\n";
    }
}
