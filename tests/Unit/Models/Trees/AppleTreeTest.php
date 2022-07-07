<?php

namespace Unit\Models\Trees;

use App\Factories\Trees\AppleTreeFactory;
use App\Models\Fruits\Apple;
use App\Models\Trees\AppleTree;
use PHPUnit\Framework\TestCase;

class AppleTreeTest extends TestCase
{

    public function testFruitsCount()
    {
        $appleTree = AppleTreeFactory::createOne();
        $fruitsCount = $appleTree->fruitsCount();
        $this->assertIsInt($fruitsCount);
        $this->assertGreaterThanOrEqual(AppleTree::MIN_APPLES_COUNT, $fruitsCount);
        $this->assertLessThanOrEqual(AppleTree::MAX_APPLES_COUNT, $fruitsCount);
    }

    public function testFruits()
    {
        $appleTree = AppleTreeFactory::createOne();
        $fruits = $appleTree->fruits();
        $this->assertIsArray($fruits);
        $this->assertGreaterThanOrEqual(AppleTree::MIN_APPLES_COUNT, count($fruits));
        $this->assertLessThanOrEqual(AppleTree::MAX_APPLES_COUNT, count($fruits));
        $this->assertInstanceOf(Apple::class, $fruits[0]);
    }
}
