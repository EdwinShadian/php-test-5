<?php

namespace Unit\Models\Fruits;

use App\Factories\Fruits\AppleFactory;
use PHPUnit\Framework\TestCase;

class AppleTest extends TestCase
{
    public function testWeight()
    {
        $apple = AppleFactory::createOne();
        $weight = $apple->weight();
        $this->assertIsInt($weight);
        $this->assertGreaterThanOrEqual(150, $weight);
        $this->assertLessThanOrEqual(180, $weight);
    }
}
