<?php

class AddNode {

    public $num;
    public $next;

    public function __construct($num) {
        $this->num = $num;
        $this->next = NULL;
    }
}

class AddSinglyLinkedList {

    public function add($left, $right) {

        $lstack = new SplStack();
        $curr = $left;
        while($curr != NULL) {
            $lstack->push($curr->num);
            $curr = $curr->next;
        }

        $rstack = new SplStack();
        $curr = $right;
        while($curr != NULL) {
            $rstack->push($curr->num);
            $curr = $curr->next;
        }
    }

    private function sizeOf($list) {
        $size = 0;
        $curr = $list;
        while($curr != NULL) {
            $size++;
            $curr = $curr->next;
        }
        return $size;
    }

}
