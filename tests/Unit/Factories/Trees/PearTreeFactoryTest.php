<?php

namespace Unit\Factories\Trees;

use App\Factories\Trees\PearTreeFactory;
use App\Models\Trees\PearTree;
use PHPUnit\Framework\TestCase;

class PearTreeFactoryTest extends TestCase
{

    public function testCreate()
    {
        $pearTrees = PearTreeFactory::create(2);
        $this->assertIsArray($pearTrees);
        $this->assertInstanceOf(PearTree::class, $pearTrees[0]);
    }

    public function testCreateOne()
    {
        $pearTree = PearTreeFactory::createOne();
        $this->assertInstanceOf(PearTree::class, $pearTree);
    }
}
