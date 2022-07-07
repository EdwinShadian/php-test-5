<?php

namespace Unit\Factories\Trees;

use App\Factories\Trees\AppleTreeFactory;
use App\Models\Trees\AppleTree;
use PHPUnit\Framework\TestCase;

class AppleTreeFactoryTest extends TestCase
{

    public function testCreateOne()
    {
        $appleTree = AppleTreeFactory::createOne();
        $this->assertInstanceOf(AppleTree::class, $appleTree);
    }

    public function testCreate()
    {
        $appleTrees = AppleTreeFactory::create(2);
        $this->assertIsArray($appleTrees);
        $this->assertInstanceOf(AppleTree::class, $appleTrees[0]);
    }
}
