<?php

require __DIR__ . '/../../../src/algo/graph/05_uf.php';

class UFGraphTest extends PHPUnit_Framework_TestCase 
{
    public function testUF() {

        $graph = new UFGraph();
        $graph->addEdge(0, 1);
        $graph->addEdge(1, 2);
        $graph->addEdge(2, 3);
        $graph->addEdge(3, 0);
        
        $this->assertTrue($graph->isCyclic());
    }
}
