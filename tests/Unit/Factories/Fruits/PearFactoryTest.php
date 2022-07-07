<?php

namespace Unit\Factories\Fruits;

use App\Factories\Fruits\PearFactory;
use App\Models\Fruits\Pear;
use PHPUnit\Framework\TestCase;

class PearFactoryTest extends TestCase
{

    public function testCreateOne()
    {
        $pear = PearFactory::createOne();
        $this->assertInstanceOf(Pear::class, $pear);
    }

    public function testCreate()
    {
        $pears = PearFactory::create(2);
        $this->assertIsArray($pears);
        $this->assertInstanceOf(Pear::class, $pears[0]);
    }
}
