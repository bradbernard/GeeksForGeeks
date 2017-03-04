<?php

// http://www.geeksforgeeks.org/dynamic-programming-set-16-floyd-warshall-algorithm/
// Time Complexity: O(V^3)

class ASPPGraph {

    private $inf = 9999;

    public function floyd($graph) {
        $count = count($graph);
        $dist = $graph;

        for($k = 0; $k < $count; ++$k) {
            for($i = 0; $i < $count; ++$i) {
                for($j = 0; $j < $count; ++$j) {
                    $dist[$i][$j] = min($dist[$i][$j], $dist[$i][$k] + $dist[$j][$k]);
                }
            }
        }

        $this->printSolution($dist);
    }

    public function printSolution($dist) {
        $count = count($dist);

        echo "Shortest distances between ever pair of vertices: \n";
        for($i = 0; $i < $count; ++$i) {
            for($j = 0; $j < $count; ++$j) {
                if($dist[$i][$j] == $this->inf) 
                    echo "INF ";
                else 
                    echo $dist[$i][$j] . ' ';
            }
            echo "\n"; 
        }
    }
}
