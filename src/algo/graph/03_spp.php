<?php

// http://www.geeksforgeeks.org/greedy-algorithms-set-6-dijkstras-shortest-path-algorithm/
// Time Complexity of the implementation is O(V^2). If the input graph is represented using adjacency list, it can be reduced to O(E log V) with the help of binary heap.

class SPPGraph {

    public function minDistance($dist, $sptSet) {
        $min = PHP_INT_MAX;
        $minIndex = -1;
        $count = count($dist);

        for($v = 0; $v < $count; ++$v) {
            if($sptSet[$v] == 0 && $dist[$v] <= $min) {
                $min = $dist[$v];
                $minIndex = $v;
            }
        }

        return $minIndex;
    }

    public function dijkstra($graph, $s) {
        $dist = [];
        $sptSet = [];

        $count = count($graph);

        for($i = 0; $i < $count; ++$i) {
            $dist[$i] = PHP_INT_MAX;
            $sptSet[$i] = 0;
        }

        $dist[$s] = 0;

        for($i = 0; $i < $count - 1; ++$i) {
            $u = $this->minDistance($dist, $sptSet);
            $sptSet[$u] = 1;

            for($v = 0; $v < $count; ++$v) {
                if(!$sptSet[$v] && $graph[$u][$v] != 0 && $dist[$u] + $graph[$u][$v] < $dist[$v])
                    $dist[$v] = $dist[$u] + $graph[$u][$v];
            }
        }

        $this->printSolution($dist, $count);
    }

    public function printSolution($dist, $n) {
        echo "Vertex   Distance from Source\n";
        for($i = 0; $i < count($dist); ++ $i)
            echo "$i \t\t " . $dist[$i] . "\n";
    }

}
