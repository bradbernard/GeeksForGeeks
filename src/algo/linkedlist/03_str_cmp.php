<?php

class CMPNode {

    public $char;
    public $next;

    public function __construct($char) {
        $this->char = $char;
        $this->next = NULL;
    }
}

class CMPSinglyLinkedList {

    public function compare($left, $right) {
        $lrun = $left;
        $rrun = $right;

        while($lrun != NULL && $rrun != NULL && $lrun->char == $rrun->char) {
            $lrun = $lrun->next;
            $rrun = $rrun->next;
        }

        if($lrun != NULL && $rrun != NULL)
            return ($lrun->char > $rrun->char ? 1 : -1);
        else if($lrun != NULL && $rrun == NULL)
            return 1;
        else if($lrun == NULL && $rrun != NULL)
            return -1;

        return 0;
    }
}
