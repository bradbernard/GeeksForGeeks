<?php

require __DIR__ . '/../../../src/algo/graph/01_bfs.php';

class BFSGraphTest extends PHPUnit_Framework_Testcase 
{
    public function testBFS() {

        $this->expectOutputString('BFS from vertex 2: 2 0 3 1 ');

        $graph = new BFSGraph();
        $graph->addEdge(0, 1);
        $graph->addEdge(0, 2);
        $graph->addEdge(1, 2);
        $graph->addEdge(2, 0);
        $graph->addEdge(2, 3);
        $graph->addEdge(3, 3);

        $graph->BFS(2);
    }
}
