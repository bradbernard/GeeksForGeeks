<?php

// http://www.geeksforgeeks.org/union-find/
// Time Complexity: O(V * E)

class UFGraph {

    private $edges;

    public function __construct() {
        $this->edges = NULL;
    }

    public function addEdge($u, $v) {
        $this->edges[$u][] = $v;
    }

    public function findParent($parent, $x) {
        if(!isset($parent[$x]))
            return $x;
        else
            return $this->findParent($parent, $parent[$x]);
    }

    public function isCyclic() {
        $parent = [];

        foreach($this->edges as $u => $_) {
            foreach($this->edges[$u] as $v) {
                $x = $this->findParent($parent, $u);
                $y = $this->findParent($parent, $v);
                if($x == $y) 
                    return true;
                $parent[$x] = $y;
            }
        }

        return false;
    }
}
