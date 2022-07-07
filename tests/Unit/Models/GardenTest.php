<?php

namespace Unit\Models;

use App\Models\Garden;
use App\Models\Trees\AppleTree;
use App\Models\Trees\PearTree;
use PHPUnit\Framework\TestCase;

class GardenTest extends TestCase
{
    public function testAppleTree()
    {
        $garden = new Garden(1, 1);
        $appleTree = $garden->appleTree(0);
        $this->assertInstanceOf(AppleTree::class, $appleTree);
    }

    public function testAppleTreesCount()
    {
        $garden = new Garden(1, 1);
        $appleTreesCount = $garden->appleTreesCount();
        $this->assertEquals(1, $appleTreesCount);
    }

    public function testPearTreesCount()
    {
        $garden = new Garden(1, 1);
        $pearTreesCount = $garden->pearTreesCount();
        $this->assertEquals(1, $pearTreesCount);
    }

    public function testPearTree()
    {
        $garden = new Garden(1, 1);
        $pearTree = $garden->pearTree(0);
        $this->assertInstanceOf(PearTree::class, $pearTree);
    }
}
