<?php

require __DIR__ . '/../../../src/algo/graph/02_dfs.php';

class DFSGraphTest extends PHPUnit_Framework_Testcase 
{
    public function testDFS() {

        $this->expectOutputString('DFS from vertex 2: 2 3 0 1 ');

        $graph = new DFSGraph();
        $graph->addEdge(0, 1);
        $graph->addEdge(0, 2);
        $graph->addEdge(1, 2);
        $graph->addEdge(2, 0);
        $graph->addEdge(2, 3);
        $graph->addEdge(3, 3);

        $graph->DFS(2);
    }
}
