<?php

// http://www.geeksforgeeks.org/delete-a-given-node-in-linked-list-under-given-constraints/
// Time Complexity: O(N)

class DELNode {

    public $data;
    public $next;

    public function __construct($data) {
        $this->data = $data;
        $this->next = NULL;
    }

}

class DELSinglyLinkedList {

    public function deleteNode($head, $node) {
        if($head === $node) {
            if($head->next == NULL) {
                throw new Exception('List cannot be made empty');
            }

            $head->data = $head->next->data;
            $head->next = $head->next->next;
            return;
        }

        $curr = $head;
        while($curr->next != NULL && $curr->next !== $node) {
            $curr = $curr->next;
        }

        $curr->next = $curr->next->next;
    }

    public function out($head) {
        $cur = $head;
        while($cur != NULL) {
            echo $cur->data . ' ';
            $cur = $cur->next;
        }
        echo "\n";
    }

}
