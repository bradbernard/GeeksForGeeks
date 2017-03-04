<?php

require '../../../src/algo/graph/01_bfs.php';

use PHPUnit\Framework\TestCase;

class GraphBFSTest extends PHPUnit_Framework_TestCase 
{
    public function testBFS() {

        $this->expectOutputString('BFS from vertex 2: ');

        $graph = new Graph();
        $graph->addEdge(0, 1);
        $graph->addEdge(0, 2);
        $graph->addEdge(1, 2);
        $graph->addEdge(2, 0);
        $graph->addEdge(2, 3);
        $graph->addEdge(3, 3);

        echo "BFS from vertex 2: ";
        $graph->BFS(2);
        echo "\n";
    }
}
