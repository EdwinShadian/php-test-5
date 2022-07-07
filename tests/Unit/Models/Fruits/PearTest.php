<?php

namespace Unit\Models\Fruits;

use App\Factories\Fruits\PearFactory;
use App\Models\Fruits\Pear;
use PHPUnit\Framework\TestCase;

class PearTest extends TestCase
{

    public function testWeight()
    {
        $pear = PearFactory::createOne();
        $weight = $pear->weight();
        $this->assertIsInt($weight);
        $this->assertGreaterThanOrEqual(Pear::PEAR_MIN_WEIGHT, $weight);
        $this->assertLessThanOrEqual(Pear::PEAR_MAX_WEIGHT, $weight);
    }
}
