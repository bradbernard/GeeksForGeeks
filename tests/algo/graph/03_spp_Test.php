<?php

require __DIR__ . '/../../../src/algo/graph/03_spp.php';

class SPPGraphTest extends PHPUnit_Framework_TestCase 
{
    public function testSPP() {

        $output = 
"Vertex   Distance from Source
0 \t\t 0
1 \t\t 4
2 \t\t 12
3 \t\t 19
4 \t\t 21
5 \t\t 11
6 \t\t 9
7 \t\t 8
8 \t\t 14\n";

        $this->expectOutputString($output);

        $matrix = [[0, 4, 0, 0, 0, 0, 0, 8, 0],
                  [4, 0, 8, 0, 0, 0, 0, 11, 0],
                  [0, 8, 0, 7, 0, 4, 0, 0,  2],
                  [0, 0, 7, 0, 9, 14, 0, 0, 0],
                  [0, 0, 0, 9, 0, 10, 0, 0, 0],
                  [0, 0, 4, 14, 10, 0, 2, 0,0],
                  [0, 0, 0, 0, 0, 2, 0, 1,  6],
                  [8, 11, 0, 0, 0, 0, 1, 0, 7],
                  [0, 0, 2, 0, 0, 0, 6, 7,  0]];

        $graph = new SPPGraph();
        $graph->dijkstra($matrix, 0);
    }
}
