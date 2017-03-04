<?php

// http://www.geeksforgeeks.org/greedy-algorithms-set-5-prims-minimum-spanning-tree-mst-2/
// Time Complexity: O(V^2)

class MSTGraph {

    public function minKey($key, $mstSet) {
        $min = PHP_INT_MAX;
        $min_ind = -1;
        $count = count($key);

        for($i = 0; $i < $count; ++$i) {
            if($mstSet[$i] == -1 && $key[$i] < $min) {
                $min = $key[$i];
                $min_ind = $i;
            }
        }

        return $min_ind;
    }

    public function primMST($graph) {
        $parent = [];
        $key = [];
        $mstSet = [];

        $count = count($graph);
        for($i = 0; $i < $count; ++$i) {
            $key[$i] = PHP_INT_MAX;
            $mstSet[$i] = -1;
        }

        $key[0] = 0;
        $parent[0] = -1;

        for($i = 0; $i < $count - 1; ++$i) {
            $u = $this->minKey($key, $mstSet);
            $mstSet[$u] = 1;

            for($v = 0; $v < $count; ++$v) {
                if($graph[$u][$v] != 0 && $mstSet[$v] == -1 && $graph[$u][$v] < $key[$v]) {
                    $parent[$v] = $u;
                    $key[$v] = $graph[$u][$v];
                }
            }
        }

        $this->printMST($parent, $count, $graph);
    }

    public function printMST($parent, $count, $graph) {
        echo "Edge \t\t Weight\n";
        for($i = 1; $i < $count; ++$i) {
            echo $parent[$i] . " - " . $i . " \t\t " . $graph[$i][$parent[$i]] . "\n";
        }
    }
}
