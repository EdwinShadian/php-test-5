<?php

namespace Unit\Models\Trees;

use App\Factories\Trees\PearTreeFactory;
use App\Models\Fruits\Pear;
use PHPUnit\Framework\TestCase;

class PearTreeTest extends TestCase
{

    public function testFruits()
    {
        $pearTree = PearTreeFactory::createOne();
        $fruits = $pearTree->fruits();
        $this->assertIsArray($fruits);
        $this->assertGreaterThanOrEqual(0, count($fruits));
        $this->assertLessThanOrEqual(20, count($fruits));
        if (count($fruits) > 0) {
            $this->assertInstanceOf(Pear::class, $fruits[0]);
        }
    }

    public function testFruitsCount()
    {
        $pearTree = PearTreeFactory::createOne();
        $fruitsCount = $pearTree->fruitsCount();
        $this->assertIsInt($fruitsCount);
        $this->assertGreaterThanOrEqual(0, $fruitsCount);
        $this->assertLessThanOrEqual(20, $fruitsCount);
    }
}
