<?php

namespace Unit\Models\Fruits;

use App\Factories\Fruits\AppleFactory;
use App\Models\Fruits\Apple;
use PHPUnit\Framework\TestCase;

class AppleTest extends TestCase
{
    public function testWeight()
    {
        $apple = AppleFactory::createOne();
        $weight = $apple->weight();
        $this->assertIsInt($weight);
        $this->assertGreaterThanOrEqual(Apple::APPLE_MIN_WEIGHT, $weight);
        $this->assertLessThanOrEqual(Apple::APPLE_MAX_WEIGHT, $weight);
    }
}
