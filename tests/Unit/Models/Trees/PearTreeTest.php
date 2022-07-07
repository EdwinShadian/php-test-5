<?php

namespace Unit\Models\Trees;

use App\Factories\Trees\PearTreeFactory;
use App\Models\Fruits\Pear;
use App\Models\Trees\PearTree;
use PHPUnit\Framework\TestCase;

class PearTreeTest extends TestCase
{

    public function testFruits()
    {
        $pearTree = PearTreeFactory::createOne();
        $fruits = $pearTree->fruits();
        $this->assertIsArray($fruits);
        $this->assertGreaterThanOrEqual(PearTree::MIN_PEARS_COUNT, count($fruits));
        $this->assertLessThanOrEqual(PearTree::MAX_PEARS_COUNT, count($fruits));
        if (count($fruits) > 0) {
            $this->assertInstanceOf(Pear::class, $fruits[0]);
        }
    }

    public function testFruitsCount()
    {
        $pearTree = PearTreeFactory::createOne();
        $fruitsCount = $pearTree->fruitsCount();
        $this->assertIsInt($fruitsCount);
        $this->assertGreaterThanOrEqual(PearTree::MIN_PEARS_COUNT, $fruitsCount);
        $this->assertLessThanOrEqual(PearTree::MAX_PEARS_COUNT, $fruitsCount);
    }
}
