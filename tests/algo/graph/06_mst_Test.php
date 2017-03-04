<?php

require __DIR__ . '/../../../src/algo/graph/06_mst.php';

class MSTGraphTest extends PHPUnit_Framework_TestCase 
{
    public function testMST() {

        $output = 
"Edge \t\t Weight
0 - 1 \t\t 2
1 - 2 \t\t 3
0 - 3 \t\t 6
1 - 4 \t\t 5\n";

        $this->expectOutputString($output);

        $graph = new MSTGraph();
        $graph->primMST(
            [[0, 2, 0, 6, 0],
            [2, 0, 3, 8, 5],
            [0, 3, 0, 0, 7],
            [6, 8, 0, 0, 9],
            [0, 5, 7, 9, 0]]
        );
    }
}
