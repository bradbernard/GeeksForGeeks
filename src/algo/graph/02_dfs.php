<?php

// http://www.geeksforgeeks.org/depth-first-traversal-for-a-graph/
// Time Complexity: O(V+E) where V is number of vertices in the graph and E is number of edges in the graph.

class Graph {

    private $edges;

    public function __construct() {
        $this->edges = NULL;
    }

    public function addEdge($u, $v) {
        $this->edges[$u][] = $v;
    }

    public function DFS($s) {
        $stack = new SplStack();
        $stack->push($s);

        $visited = array_fill(0, count($this->edges), 0);
        $visited[$s] = 1;

        while(!$stack->isEmpty()) {
            $n = $stack->pop();
            echo "$n ";
            foreach($this->edges[$n] as $u) {
                if(!$visited[$u]) {
                    $stack->push($u);
                    $visited[$u] = 1;
                }
            }
        }
    }
}

