<?php

namespace Unit\Models\Trees;

use App\Factories\Trees\AppleTreeFactory;
use App\Models\Fruits\Apple;
use PHPUnit\Framework\TestCase;

class AppleTreeTest extends TestCase
{

    public function testFruitsCount()
    {
        $appleTree = AppleTreeFactory::createOne();
        $fruitsCount = $appleTree->fruitsCount();
        $this->assertIsInt($fruitsCount);
        $this->assertGreaterThanOrEqual(40, $fruitsCount);
        $this->assertLessThanOrEqual(50, $fruitsCount);
    }

    public function testFruits()
    {
        $appleTree = AppleTreeFactory::createOne();
        $fruits = $appleTree->fruits();
        $this->assertIsArray($fruits);
        $this->assertGreaterThanOrEqual(40, count($fruits));
        $this->assertLessThanOrEqual(50, count($fruits));
        $this->assertInstanceOf(Apple::class, $fruits[0]);
    }
}
