<?php

namespace Unit\Factories\Fruits;

use App\Factories\Fruits\AppleFactory;
use App\Models\Fruits\Apple;
use PHPUnit\Framework\TestCase;

class AppleFactoryTest extends TestCase
{

    public function testCreate()
    {
        $apples = AppleFactory::create(2);
        $this->assertIsArray($apples);
        $this->assertInstanceOf(Apple::class, $apples[0]);
    }

    public function testCreateOne()
    {
        $apple = AppleFactory::createOne();
        $this->assertInstanceOf(Apple::class, $apple);
    }
}
