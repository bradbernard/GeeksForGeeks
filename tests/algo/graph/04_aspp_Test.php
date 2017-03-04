<?php

require __DIR__ . '/../../../src/algo/graph/04_aspp.php';

class ASPPGraphTest extends PHPUnit_Framework_TestCase 
{
    public function testASPP() {

      $inf = 9999;

        $output = 
"Shortest distances between ever pair of vertices: 
0 5 11 10 
5 0 3 INF 
11 3 0 1 
10 INF 1 0 \n";

        $this->expectOutputString($output);

        $matrix = [[0,   5,  $inf, 10],
                    [$inf, 0,   3, $inf],
                    [$inf, $inf, 0,   1],
                    [$inf, $inf, $inf, 0]];

        $graph = new ASPPGraph();
        $graph->floyd($matrix);
    }
}
