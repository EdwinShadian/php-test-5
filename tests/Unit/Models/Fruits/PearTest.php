<?php

namespace Unit\Models\Fruits;

use App\Factories\Fruits\PearFactory;
use PHPUnit\Framework\TestCase;

class PearTest extends TestCase
{

    public function testWeight()
    {
        $pear = PearFactory::createOne();
        $weight = $pear->weight();
        $this->assertIsInt($weight);
        $this->assertGreaterThanOrEqual(130, $weight);
        $this->assertLessThanOrEqual(170, $weight);
    }
}
